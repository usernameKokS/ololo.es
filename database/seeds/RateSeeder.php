<?php

use Illuminate\Database\Seeder;
use App\Rate;

class RateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Rate::truncate();
        $news = factory(App\Rate::class, 400)->create();
        $this->command->info('Записи созданы!');

    }
}
