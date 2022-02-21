<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Chart;
use App\Ad;
class clearads extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:clearads';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        /**
         * 1. Чистим charts от элементов, у которых number_of_views, view_phones,
         * auto_renovados равны 0. Они бесполезны для расчетов, а ввиду их кол-ва,
         * хорошо отнимают время на обработку. 
         */
        /*
        Chart::where([
            'number_of_views' => 0,
            'view_phones' => 0,
            'auto_renovados' => 0
        ])->delete();
        */

        /**
         * 
         * Все верно, был скрипт на кроне, который включался ежедневно в 23:59.
            Он нужен для того, чтобы в charts записать number_of_views, view_phones, и auto_renovados 
            конкретного объявления за сегодня.

            - В charts статистика по объявлению храниться за последние 30 дней. 
            Старая строка 31 дня ежедневно удаляется, а ее значение приплюсовывается 
            в текущему значению ads.number_of_views2.

            Итого: каждый день в charts записывается строка с текущей датой, 
            ads.id, number_of_views, view_phones, auto_renovados, 
            где number_of_views = 
            ads.number_of_views 
            - сумма number_of_views по этому id за 30 дней из charts 
            - ads.number_of_views2.    
            
            view_phones и auto_renovados высчитываются идентично.

            Chip, [28.10.20 12:07]
            Каждые 30 минут чекеры обновляют графу ads.number_of_views, 
            а ads.number_of_views2 - статистика объявления 31 день + 32 + 33 +...

            Chip, [28.10.20 12:07]
            С ads.number_of_views работаю я, а с ads.number_of_views2 - крон

            
         */

        /*
        $ads = Ad::get();

        foreach($ads as $ad){

            $oldchart1 = Chart::where('ad_id', $ad->id)->get()->sum('number_of_views');
            $oldchart2 = Chart::where('ad_id', $ad->id)->get()->sum('view_phones');
            $oldchart3 = Chart::where('ad_id', $ad->id)->get()->sum('auto_renovados');

            $newchart = new Chart;
            $newchart->ad_id = $ad->id;
            $newchart->number_of_views = $ad['number_of_views'] - $ad['number_of_views2'] - $oldchart1; 
            $newchart->view_phones = $ad['view_phones'] - $ad['view_phones2'] - $oldchart2; 
            $newchart->auto_renovados = $ad['auto_renovados'] - $ad['auto_renovados2'] - $oldchart3; 
            $newchart->save();

        }

        $charts = Chart::where('updated_at', '<', Carbon::now()->subDays(30)->toDateString())->get();

        foreach($charts as $chart){

            $ad = Ad::where('id', $chart['ad_id'])->first();
            $ad->number_of_views2 = $ad['number_of_views2'] + $chart['number_of_views'];
            $ad->view_phones2 = $ad['view_phones2'] + $chart['view_phones'];
            $ad->auto_renovados2 = $ad['auto_renovados2'] + $chart['auto_renovados']; 
            $ad->save();
            $chart->delete();
        }

        error_log('Charts clear!');
        */
    }
}
