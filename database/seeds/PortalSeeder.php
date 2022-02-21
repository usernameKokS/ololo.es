<?php

use Illuminate\Database\Seeder;
use App\Portal;
use App\Ad;
use App\Chart;
class PortalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Portal::truncate();

        $news = factory(App\Portal::class, 3)->create();
        $this->command->info('Записи созданы!');

        Ad::truncate();
        $news = factory(App\Ad::class, 3)->create();
        $this->command->info('Записи созданы!');

        
        Chart::truncate();
        $news = factory(App\Chart::class, 1000)->create();
        $this->command->info('Записи созданы!');
    }
}
