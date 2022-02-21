<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Avatar;
use App\Chart;
use App\Forum;
use App\Portal;
use App\Post;
use App\Tariff;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Support\Facades\DB;

class StatisticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('pages.statistick');
    }

    public function portalsList($request, $portalsOrderBy = ['status', 'desc']) {
		
        if ($request['postid'] != null && $request['postid'] != 'Todos') {
            $postid = $request['postid'];
        }else {
            $postid = 'null';
        }

        if (!Post::whereUserId(\auth()->user()->id)->where('is_delete', 0)->whereId($postid)->first() && $postid != 'null') {
            throw new NotFoundHttpException();
        }

        $user = Auth::user();

        $tariffs = Tariff::where('user_id', $user->id)
            ->where('end', '>=', Carbon::now())
            ->whereIn('status', ['complete', 'modificar', 'eliminar']);
		
        $plans = [];

        if ($postid != 'null') {
            $tariffs->where("post_id", $postid);
            $tariffData = $tariffs->latest()->first();

            if ($tariffData !== null) {
                //                throw new NotFoundHttpException();
                $plans[] = $tariffs->latest()->first()['name'];
            }
			/*else
			{
				throw new NotFoundHttpException();
			}*/
        }else {
            $tariffs = $tariffs->get();

            foreach ($tariffs as $tariff) {
                if ($tariff['name'] == 'silver') {
                    $plans[] = 'silver';
                }
                if ($tariff['name'] == 'gold') {
                    $plans[] = 'gold';
                }
                if ($tariff['name'] == 'dimond') {
                    $plans[] = 'dimond';
                }
            }
        }

        $portals = Portal::query();

        $portals = $portals
					->whereIn('tariff', $plans)
					->where('show_for_client', 'active')
					->orderBy($portalsOrderBy[0], $portalsOrderBy[1]);

        if($portals != null && isset($tariffData) &&  $tariffData !== null)
            foreach($portals as $k => $portal)
                $portals[$k]->tariff_status = $tariffData->status;

        return $portals;
    }

    public function dashboard(Request $request) {
        $user_id = auth()->user()->id;

        if ($request['site'] != null) {
            $site = $request['site'];
			if($site == 'Escortbook.com')
			{
				$site = ['id' => $request['site'], 'name' => 'Tu página WEB'];
			}
			else
			{
				$site = ['id' => $request['site'], 'name' => $request['site']];
			}
        }else {
            $site = 'null';
        }

        if ($request['postid'] != null) {
            $postid = $request['postid'];
        }else {
            $postid = 'null';
        }

        $portalsList = $this->portalsList($request, ['site', 'asc'])->get();
		$portals = $portalsTmp = [];
		
		foreach($portalsList as $portal)
		{	
            if($portal->proximamente)
                continue;
                
			if($portal->site == 'Escortbook.com')
				$portalsTmp[$portal->site] = 'Tu página WEB';
			else
				$portalsTmp[$portal->site] = $portal->site;
		}
		
		asort($portalsTmp);
		
		foreach($portalsTmp as $code => $portal)
		{
			$portals[] = ['id' => $code, 'name' => $portal];
		}
		
        // $portals = $portals->distinct('site')->pluck('site');

        $portals = collect(array_merge([['id' => 'Todos', 'name' => 'Todos']], $portals));

        $posts = Post::whereUserId($user_id)->wherePublish(1)->where('is_delete', 0)->whereArchive(0)->get([
            'id', 'name', 'status', 'publish',
        ]);
        foreach ($posts as $post) {
            $avatar = Avatar::where('user_id', $user_id)
                ->where('post_id', $post->id)
                ->whereActive(1)
                ->latest()
                ->first();

            $post->avatar = $avatar ? "/storage/" . $avatar['url'] : null;
        }

        $todos = [0 => ['id' => null, 'name' => 'Todos', 'avatar' => null]];
        $posts = collect(array_merge($todos, $posts->toArray()));

        return view('pages.dashboard', compact('postid', 'portals', 'site', 'posts'));
    }

    public function dashboardgetads(Request $request) {
        $user = Auth::user();

        $ads = $user->getAllAds4Statistic($request['site'], $request['postid']);
		
        if(!$ads || sizeof($ads->toArray()) <= 0)
            return [
                'ads' => [], // ads list
                'sum1' => 0, // summ number_of_views from ads list
                'sum2' => 0, // summ view_phones from ads list
                'sum3' => 0, // summ contacted_by_email from ads list 
                'sum4' => 0, // summ auto_renovados from ads list
                'sum5' => 0, // summ shared_information from ads list
                'chart1' => [
					[
						'labels' => [],
						'datasets' => [
							[
								'label' => "Total",
								'backgroundColor' => "#fe6885",
								'data' => [],
							],
						],
					]
				], 
                'chart2' => [
					[
						'labels' => [],
						'datasets' => [
							[
								'label' => "Total",
								'backgroundColor' => "#fe6885",
								'data' => [],
							],
						],
					]
				],
                'chart3' => [
					[
						'labels' => [],
						'datasets' => [
							[
								'label' => "Total",
								'backgroundColor' => "#fe6885",
								'data' => [],
							],
						],
					]
				]
            ];

        // $ads_forsum2 = $ads;
        $adIds = $ads->pluck('id');

        $sum1 = 0;
        $sum2 = 0;
        $sum3 = 0;
        $sum4 = 0;
        $sum5 = 0;

        /*
        $sum1 = $ads_forsum2->sum('number_of_views');
        $sum2 = $ads_forsum2->sum('view_phones');
        $sum3 = $ads_forsum2->sum('contacted_by_email');
        $sum4 = $ads_forsum2->sum('auto_renovados');
        $sum5 = $ads_forsum2->sum('shared_information');

        $sum1n = $ads_forsum2->sum('number_of_views2');
        $sum2n = $ads_forsum2->sum('view_phones2');
        $sum4n = $ads_forsum2->sum('auto_renovados2');
        */
        $chart1_data = [];
        $chart2_data = [];
        $chart3_data = [];
        $keyarray = [];


        
        $begin = new \DateTime();
        $end = new \DateTime();
        $end = $end->modify( '-31 days' );

        $interval = new \DateInterval('P1D');
        $daterange = new \DatePeriod($end, $interval ,$begin);
        
        $fillArray = [
            'number_of_views' => 0,
            'view_phones' => 0,
            'auto_renovados' => 0,
            'original_number_of_views' => 0,
            'original_view_phones' => 0,
            'original_auto_renovados' => 0
        ];

        $datePeriod = [];
        
        foreach($daterange as $date) $datePeriod[$date->format("d.m.Y")] = $fillArray;

        $datePeriod[$begin->format("d.m.Y")] = $fillArray;  
        $datePeriod = array_reverse($datePeriod);

        /** 
         SELECT 
            s.id, 
            s.ad_id, 
            s.create_date,
            s.number_of_views, 
            s.view_phones, 
            s.auto_renovados, 
            if(@ad_id = s.ad_id, s.number_of_views - @number_of_views, 0) as subtract_number_of_views,
            if(@ad_id = s.ad_id, s.view_phones - @view_phones, 0) as subtract_view_phones,
            if(@ad_id = s.ad_id, s.auto_renovados - @auto_renovados, 0) as subtract_auto_renovados,
            @number_of_views := s.number_of_views,
            @view_phones := s.view_phones,
            @auto_renovados := s.auto_renovados,
            @ad_id := s.ad_id
        FROM charts s WHERE ad_id IN (66797, 67619) AND create_date >= '2020-11-30' ORDER by ad_id ASC, s.create_date asc;
         * 
        */
		/*$adCharts = DB::table('charts')
			->whereIn('ad_id', $adIds)
            ->where('create_date', '>=', Carbon::today()->subDays(31))
            ->orderBy('create_date', 'asc')
			->get();*/

        $adCharts = DB::table('charts as s')
            ->select(DB::raw('
                s.id, s.ad_id, s.create_date, 
                s.number_of_views as original_number_of_views, 
                s.view_phones as original_view_phones, 
                s.auto_renovados as original_auto_renovados,
                if(@ad_id = s.ad_id, s.number_of_views - @number_of_views, 0) as number_of_views, 
                if(@ad_id = ad_id, view_phones - @view_phones, 0) as view_phones, 
                if(@ad_id = ad_id, auto_renovados - @auto_renovados, 0) as auto_renovados, 
                @number_of_views := s.number_of_views, 
                @view_phones := s.view_phones, 
                @auto_renovados := s.auto_renovados, 
                @ad_id := ad_id
            '))
            ->whereIn('ad_id', $adIds->toArray())
            ->where('create_date', '>=', Carbon::today()->subDays(31))
            ->orderBy('ad_id', 'asc')
            ->orderBy('create_date', 'asc')
            ->get();

        if(sizeof($adCharts) > 0)
        {
            foreach($adCharts as $key => $adChart)
            {
                $adChart->create_date = new \DateTime($adChart->create_date);
    
                if(isset($datePeriod[$adChart->create_date->format("d.m.Y")]))
                {
					if($adChart->number_of_views < 0)
						$adChart->number_of_views = $adChart->number_of_views * -1;
						
					if($adChart->view_phones < 0)
						$adChart->view_phones = $adChart->view_phones * -1;
						
					if($adChart->auto_renovados < 0)
						$adChart->auto_renovados = $adChart->auto_renovados * -1;
						
                    $datePeriod[$adChart->create_date->format("d.m.Y")]['number_of_views'] += $adChart->number_of_views ? $adChart->number_of_views : 0;
                    $datePeriod[$adChart->create_date->format("d.m.Y")]['view_phones'] += $adChart->view_phones ? $adChart->view_phones : 0;
                    $datePeriod[$adChart->create_date->format("d.m.Y")]['auto_renovados'] += $adChart->auto_renovados ? $adChart->auto_renovados : 0;
                    $datePeriod[$adChart->create_date->format("d.m.Y")]['original_number_of_views'] += $adChart->original_number_of_views ? $adChart->original_number_of_views : 0;
                    $datePeriod[$adChart->create_date->format("d.m.Y")]['original_view_phones'] += $adChart->original_view_phones ? $adChart->original_view_phones : 0;
                    $datePeriod[$adChart->create_date->format("d.m.Y")]['original_auto_renovados'] += $adChart->original_auto_renovados ? $adChart->original_auto_renovados : 0;
                }
            }
			
			$adChartsCount = sizeof($adCharts);
			
            $sum1 = $datePeriod[$adCharts[$adChartsCount - 1]->create_date->format("d.m.Y")]['original_number_of_views'];
            $sum2 = $datePeriod[$adCharts[$adChartsCount - 1]->create_date->format("d.m.Y")]['original_view_phones'];
            $sum4 = $datePeriod[$adCharts[$adChartsCount - 1]->create_date->format("d.m.Y")]['original_auto_renovados'];
			
			foreach($datePeriod as $k => $p)
			{
				if(
					$p['number_of_views'] <= 0
					&& $p['view_phones'] <= 0
					&& $p['auto_renovados'] <= 0
					&& $p['original_number_of_views'] <= 0
					&& $p['original_view_phones'] <= 0
					&& $p['original_auto_renovados'] <= 0
				)
					unset($datePeriod[$k]);
			}
			
            // $chart1_data[] = $sum1 - $sum1n - array_sum($chart1_data);
            // $chart2_data[] = $sum2 - $sum2n - array_sum($chart2_data);
            // $chart3_data[] = $sum4 - $sum4n - array_sum($chart3_data);
    
            $chart1_data = array_column($datePeriod, 'number_of_views');
            $chart2_data = array_column($datePeriod, 'view_phones');
            $chart3_data = array_column($datePeriod, 'auto_renovados');
    
            // $keyarray[] = Carbon::now()->format('d.m.Y');
            $keyarray = array_keys($datePeriod);
        }

        $chart1 = [
            'labels' => $keyarray,
            'datasets' => [
                [
                    'label' => "Total",
                    'backgroundColor' => "#fe6885",
                    'data' => $chart1_data ? $chart1_data : [],
                ],
            ],
        ];

        $chart2 = [
            'labels' => $keyarray,
            'datasets' => [
                [
                    'label' => "Total",
                    'backgroundColor' => "#fe6885",
                    'data' => $chart2_data ? $chart2_data : [],
                ],
            ],
        ];

        $chart3 = [
            'labels' => $keyarray,
            'datasets' => [
                [
                    'label' => "Total",
                    'backgroundColor' => "#fe6885",
                    'data' => $chart3_data ? $chart3_data : [],
                ],
            ],
        ];


        foreach ($ads as $ad) {
            $ad->time = Carbon::createFromTimestamp($ad->unixtime_check !== 0 ? $ad->unixtime_check : $ad->unixtime_posting)->format('H:i:s');
        }
        
        return [
            'ads' => $ads, // ads list
            'sum1' => $sum1 ? $sum1 : 0, // summ number_of_views from ads list
            'sum2' => $sum2 ? $sum2 : 0, // summ view_phones from ads list
            'sum3' => $sum3 ? $sum3 : 0, // summ contacted_by_email from ads list 
            'sum4' => $sum4 ? $sum4 : 0, // summ auto_renovados from ads list
            'sum5' => $sum5 ? $sum5 : 0, // summ shared_information from ads list
            'chart1' => $chart1, 
            'chart2' => $chart2,
            'chart3' => $chart3
        ];
    }

    public function getforums(Request $request) {
        $user = Auth::user();

        $ads = Forum::where('status', 'active')->where('user_id', $user->id);

        if ($request['forum'] != "") {
            $ads->where('site', $request['forum']);
        }

        if ($request['postid'] != '') {
            $ads->where('post_id', $request['postid']);
        }

        $ads = $ads->paginate(14);

        foreach ($ads as $ad) {
            $ad->time = Carbon::createFromTimestamp($ad->created_at)->format('d-m-Y H:i:s');
        }

        return $ads;
    }

    public function getportals(Request $request) {

        $portals = $this->portalsList($request)->get();
        
        
        $postid = in_array($request['postid'], User::TODOS) ? null : (int)$request['postid'];
		
        foreach ($portals as $k => $portal) 
        {
            if ($postid) 
                $portal->url = '/dashboard?postid='.$postid.
                    '&site='.$portal['site'];
            else 
                $portal->url = '/dashboard?site='.$portal['site'];
			
            $portal->fillStatuses($postid);

            if(
                !strstr($request->headers->get('referer'), '/portals?postid=')
                && $portal->statustwo == 'Proximamente'
            )
                unset($portals[$k]);
        }

		$order = ['Publicado', 'Renovando', 'Publicando',  'Modificando', 'Revisar', 'Eliminando', 'Proximamente', 'No publicado'];
		$returnPortals = $portals->unique('site')->sortBy(function($model) use ($order){
			return array_search($model->statustwo, $order);
		})->values();

        return $returnPortals;
    }

    public function portals(Request $request) {
        $postid = $request['postid'] != '' ? $request['postid'] : 'null';
        $entity = auth()->user()->entity;

        if ($entity == 0 && $postid == 'null') {
            $post = Post::whereUserId(auth()->user()->id)->where('is_delete', 0)->wherePublish(1)->whereArchive(0)->latest()->first();

            if ($post) {
                return redirect('/portals?postid='.$post->id);
            }
        }

        $posts = auth()->user()->posts;

        foreach ($posts as $p) {
            $avatar = Avatar::where('user_id', auth()->user()->id)
                ->where('post_id', $p->id)
                ->whereActive(1)
                ->latest()
                ->first();

            $p->avatar = $avatar ? "/storage".$avatar->url : null;
        }

        return view('pages.portals', compact('postid', 'entity', 'posts'));
    }

    public function forumsall() {
        $user = Auth::user();

        $ads = Forum::where('user_id', $user->id)->where('status', 'active')->distinct('site')->pluck('site');

        return view('pages.forums', compact('ads'));
    }

    public function forums(Request $request) {
        $user_id = auth()->user()->id;

        $site = $request->get('site') ?? 'Todos';
        $post = $request->get('postid') ?? 'Todos';

        $sites = collect(Forum::FORUM_NAMES);
        $posts = Post::whereUserId($user_id)->where('is_delete', 0)->wherePublish(true)->where('end_pay', '>', Carbon::now())->get([
            'id', 'name',
        ]);

        foreach ($posts as $post) {
            $tariff_name = $post->getCurrTariff()->name;
            $post->no_includio = $tariff_name !== 'gold' && $tariff_name !== 'diamond';
        }

        foreach ($posts as $p) {
            $avatar = Avatar::where('user_id', $user_id)
                ->where('post_id', $p->id)
                ->whereActive(1)
                ->latest()
                ->first();

            $p->avatar = $avatar ? "/storage".$avatar->url : null;
        }

        return view('stats.forums', compact('site', 'post', 'sites', 'posts'));
    }

    public function loadForums($site, $postid) {
        $forums = Auth::user()->getAllForums($site, $postid);

        foreach ($forums as $f) {
            $f->time = Carbon::createFromTimestamp($f->unixtime_check)->format('H:i:s');
        }

        return $forums;
    }
}
