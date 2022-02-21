<?php

use Illuminate\Database\Seeder;
use App\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::truncate();
        $news = factory(App\Service::class, 120)->create();
        $this->command->info('Записи созданы!');
    }
}
