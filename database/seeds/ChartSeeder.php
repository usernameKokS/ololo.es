<?php

use Illuminate\Database\Seeder;
use App\Chart;
use Carbon\Carbon;

class ChartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Chart::truncate();
        // $news = factory(App\Chart::class, 1000)->create();

        for ($i = 31; $i >= 0; $i--) {
            $chart = new Chart;
            $chart->ad_id = 1;
            $chart->number_of_views = 10;
            $chart->updated_at = Carbon::now()->subDays($i);
            $chart->save();
        }
        

        $this->command->info('Записи созданы!');
    }
}
