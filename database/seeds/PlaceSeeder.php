<?php

use Illuminate\Database\Seeder;
use App\Place;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Place::truncate();

        $news = factory(App\Place::class, 130)->create();
        $this->command->info('Записи созданы!');
    }
}
