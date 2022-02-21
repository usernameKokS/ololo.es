<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chart;
use App\Ad;
use Illuminate\Support\Facades\DB;

class ApiPosterController extends Controller
{
    public function updateCharts(Request $request)
    {
        $bodyContent = json_decode($request->getContent());
        
        $error = null;

        if(
            !isset($bodyContent->ad_id) || $bodyContent->ad_id <= 0
        )
            $error = 'Не указан параметр "ad_id" или он пустой';

        if($error)
            return response()->json(
                ['type' => 'error', 'message' => $error], 
                200, 
                ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                JSON_UNESCAPED_UNICODE
            );

        $ad = Ad::where('id', (int)$bodyContent->ad_id)->first();

        if(!$ad)
            return response()->json(
                ['type' => 'error', 'message' => 'Объявление с ID: '. $bodyContent->ad_id .' - не найдено.'], 
                200, 
                ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                JSON_UNESCAPED_UNICODE
            );
            
        $ad->unixtime_check = time();
		
		$logStr = 'ads: ' . $bodyContent->ad_id;
		
        if(isset($bodyContent->unixtime_check))
		{
			$ad->unixtime_check = $bodyContent->unixtime_check;
			$logStr .= ', unixtime_check: ' . $bodyContent->unixtime_check;
		}

        if(isset($bodyContent->unixtime_update))
		{
			$ad->unixtime_update = $bodyContent->unixtime_update;
			$logStr .= ', unixtime_update: ' . $bodyContent->unixtime_update;
		}
            
        if(isset($bodyContent->status))
		{
			$ad->status = $bodyContent->status;
			$logStr .= ', status: ' . $bodyContent->status;
		}
        
        $ad->save();
		
		self::toLog($logStr, 'updateCharts');
		
        if(
            (isset($bodyContent->number_of_views) && $bodyContent->number_of_views > 0)
            || (isset($bodyContent->view_phones) && $bodyContent->view_phones > 0)
            || (isset($bodyContent->auto_renovados) && $bodyContent->auto_renovados > 0)
        )
        {
            $chart = Chart::where([
                'ad_id' => (int)$bodyContent->ad_id,
                'create_date' => \Carbon\Carbon::now()->format("Y-m-d")
            ])->first();
            
			$logStr = 'charts: ' . $bodyContent->ad_id;
			
            if(!$chart)
            {
                $fields = [
                    'ad_id' => (int)$bodyContent->ad_id,
                    'create_date' => \Carbon\Carbon::now(),
                ];

                $fields['number_of_views'] = isset($bodyContent->number_of_views) && (int)$bodyContent->number_of_views > 0 ? $bodyContent->number_of_views : 0;
                $fields['view_phones'] = isset($bodyContent->view_phones) && (int)$bodyContent->view_phones > 0 ? $bodyContent->view_phones : 0;
                $fields['auto_renovados'] = isset($bodyContent->auto_renovados) && (int)$bodyContent->auto_renovados > 0 ? $bodyContent->auto_renovados : 0; 

                $chart = new Chart($fields);
				
				$logStr .= 'update, number_of_views: ' . $fields['number_of_views'] 
					. ', view_phones: ' . $fields['view_phones'] 
					. ', auto_renovados: '  . $fields['auto_renovados'];
            }
            else
            {
                $chart->number_of_views = isset($bodyContent->number_of_views) && (int)$bodyContent->number_of_views > 0 ? $bodyContent->number_of_views : 0;
                $chart->view_phones = isset($bodyContent->view_phones) && (int)$bodyContent->view_phones > 0 ? $bodyContent->view_phones : 0;
                $chart->auto_renovados = isset($bodyContent->auto_renovados) && (int)$bodyContent->auto_renovados ? $bodyContent->auto_renovados : 0;
				
				$logStr .= 'add, number_of_views: ' . $chart->number_of_views 
					. ', view_phones: ' . $chart->view_phones 
					. ', auto_renovados: '  . $chart->auto_renovados;
            }
            
            $chart->save();
			self::toLog($logStr, 'updateCharts');
        }

        return response()->json(
            ['type' => 'ok', 'message' => 'Данные успешно обновлены.'], 
            200, 
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE
        );
    }

    public function getAdsForUpdate(Request $request)
    {
        /* 
            SELECT id, link 
                FROM ads 
                WHERE status='active' 
                    AND site='" + project.Variables["site"].Value + "' 
                    AND ( unixtime_check + " + project.Variables["check_time"].Value + " ) < UNIX_TIMESTAMP() 
                ORDER BY RAND() 
                LIMIT 1;
        */

        $bodyContent = json_decode($request->getContent());
        
        $error = null;

        /*
        if(
            !isset($bodyContent->site) || strlen($bodyContent->site) <= 0
        )
            $error = 'Не указан параметр "site" или он пустой';

        if(
            !isset($bodyContent->unixtime_check) || strlen($bodyContent->unixtime_check) <= 0
        )
            $error = 'Не указан параметр "unixtime_check" или он пустой';

        if($error)
            return response()->json(
                ['type' => 'error', 'message' => $error], 
                200, 
                ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                JSON_UNESCAPED_UNICODE
            );
        */ 
        $sql = "SELECT id, link FROM ads WHERE status='active'";
        $fields = [];

        if(
            isset($bodyContent->site) && strlen($bodyContent->site) > 0
        )
        {
            $sql .= " AND site=?";
            $fields[] = $bodyContent->site;
        }

        if(
            isset($bodyContent->check_time) && strlen($bodyContent->check_time) > 0
        )
        {
            $sql .= " AND ( unixtime_check + ? ) < (UNIX_TIMESTAMP())";
            $fields[] = $bodyContent->check_time;
        }
        
        $sql .= " ORDER BY RAND() LIMIT 1;";
        $result = DB::select(
            $sql, 
            $fields
        );
		
		if($result)
            foreach($result as &$res)
			{	
				if(isset($res->link))
					$res->link = trim(preg_replace('/\s\s+/', ' ', $res->link));
			}
		
		$logStr = $sql . ' / ' . join(', ', $fields);
		
		self::toLog($logStr, 'getAdsForUpdate');
		
        return response()->json(
            ['type' => 'ok', 'data' => $result], 
            200, 
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE
        );
    }

    public function getAdsForUpdateAll(Request $request)
    {
        /* 
            SELECT id, link 
                FROM ads 
                WHERE status!='delete' 
                    AND site='" + project.Variables["site"].Value + "' 
                    AND ( unixtime_check + " + project.Variables["check_time"].Value + " ) < UNIX_TIMESTAMP() 
                ORDER BY RAND() 
                LIMIT 1;
        */

        $bodyContent = json_decode($request->getContent());
        
        $error = null;

        if(
            !isset($bodyContent->site) || strlen($bodyContent->site) <= 0
        )
            $error = 'Не указан параметр "site" или он пустой';

        if(
            !isset($bodyContent->check_time) || strlen($bodyContent->check_time) <= 0
        )
            $error = 'Не указан параметр "check_time" или он пустой';

        if($error)
            return response()->json(
                ['type' => 'error', 'message' => $error], 
                200, 
                ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                JSON_UNESCAPED_UNICODE
            );
		$sql = "SELECT id, link FROM ads WHERE status!='delete' AND site=? AND ( unixtime_check + ? ) < UNIX_TIMESTAMP() ORDER BY RAND() LIMIT 1;";
		$fields = [$bodyContent->site, $bodyContent->check_time];
		
        $result = DB::select($sql, $fields);
		
		if($result)
            foreach($result as &$res)
			{	
				if(isset($res->link))
					$res->link = trim(preg_replace('/\s\s+/', ' ', $res->link));
			}
		
		$logStr = $sql . ' / ' . join(', ', $fields);
		
		self::toLog($logStr, 'getAdsForUpdateAll');
		
        return response()->json(
            ['type' => 'ok', 'data' => $result], 
            200, 
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE
        );
    }

    public function getAdsForRemove(Request $request)
    {
        /* 
            SELECT id, login, password, link 
                FROM ads 
                WHERE site='" + project.Variables["site"].Value + "' 
                    AND status='active' AND post_id=" + project.Variables["post_id"].Value + "; 
        */

        $bodyContent = json_decode($request->getContent());
        
        $error = null;

        if(
            !isset($bodyContent->site) || strlen($bodyContent->site) <= 0
        )
            $error = 'Не указан параметр "site" или он пустой';

        if(
            !isset($bodyContent->post_id) || $bodyContent->post_id <= 0
        )
            $error = 'Не указан параметр "post_id" или он пустой';

        if($error)
            return response()->json(
                ['type' => 'error', 'message' => $error], 
                200, 
                ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                JSON_UNESCAPED_UNICODE
            );
		
		$sql = "SELECT id, login, password, link, linkModificar FROM ads WHERE site=? AND status='active' AND post_id=?;";
		$fields = [$bodyContent->site, $bodyContent->post_id];
		
        $result = DB::select(
            $sql, 
            $fields
        );
		
		$logStr = $sql . ' / ' . join(', ', $fields);
		
		self::toLog($logStr, 'getAdsForRemove');
		
        if($result)
            foreach($result as &$res)
            {
                if(!$res->password)
                    $res->password = '';
                if(!$res->login)
                    $res->login = '';
                if(!$res->link)
                    $res->link = '';
                if(!$res->linkModificar)
                    $res->linkModificar = '';			
				if(isset($res->link))
					$res->link = trim(preg_replace('/\s\s+/', ' ', $res->link));
            }
            

        return response()->json(
            ['type' => 'ok', 'data' => $result], 
            200, 
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE
        );
    }

    public function getAdsForAutoRaising(Request $request)
    {
        /* 
            SELECT id, login, password, link 
                FROM ads 
                WHERE site='" + project.Variables["site"].Value + "' 
                    AND status='active' 
                    AND (UNIX_TIMESTAMP() - unixtime_update) > " + project.Variables["timing"].Value + ";
        */

        $bodyContent = json_decode($request->getContent());
        
        $error = null;

        if(
            !isset($bodyContent->site) || strlen($bodyContent->site) <= 0
        )
            $error = 'Не указан параметр "site" или он пустой';

        if(
            !isset($bodyContent->timing) || strlen($bodyContent->timing) <= 0
        )
            $error = 'Не указан параметр "timing" или он пустой';

        if($error)
            return response()->json(
                ['type' => 'error', 'message' => $error], 
                200, 
                ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                JSON_UNESCAPED_UNICODE
            );
		
		$now = new \DateTime();
		$morningTime = new \DateTime();
		$morningTime->setTime(10, 0, 0);
		
		$eveningTime = new \DateTime();
		$eveningTime->setTime(22, 0, 0);
		
		$excludeTime = 'Mañana (10:00 - 22:00)';
		
		if(
			$now >= $morningTime
			|| $now <= $eveningTime
		)
		{
			$excludeTime = 'Tarde (22:00 - 10:00)';
		}
		
		$sql = "SELECT a.id, a.login, a.password, a.link, a.linkModificar, p.worktime FROM ads a, posts p, tariffs t WHERE p.id = a.post_id AND p.worktime != '" . $excludeTime . "' AND a.site=? AND a.status='active' AND (UNIX_TIMESTAMP() - a.unixtime_update) > ? AND t.end > NOW() AND t.post_id = p.id;";
		$fields = [$bodyContent->site, $bodyContent->timing];
		
        $result = DB::select(
            $sql, 
            $fields
        );
		
		$logStr = $sql . ' / ' . join(', ', $fields);
		
		self::toLog($logStr, 'getAdsForAutoRaising');
		
		
        if($result)
            foreach($result as &$res)
			{
				if(!$res->password)
                    $res->password = '';
				
				if(isset($res->link))
					$res->link = trim(preg_replace('/\s\s+/', ' ', $res->link));
			}
                

        return response()->json(
            ['type' => 'ok', 'data' => $result], 
            200, 
            ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
            JSON_UNESCAPED_UNICODE
        );
    }
	
	private function toLog($v, $filename = 'main')
	{
		if(is_array($v))
			$v = join(', ', $v);
			
		file_put_contents(
			$_SERVER['DOCUMENT_ROOT'] . '/../logs/'. date("dmY") . '_' . $filename . '.txt',
			date("H:i:s") . ' - ' . $v . "\n",
			FILE_APPEND
		);
	}
}