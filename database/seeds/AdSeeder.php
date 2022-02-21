<?php

use Illuminate\Database\Seeder;
use App\Ad;

class AdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ad::truncate();
        $news = factory(App\Ad::class, 1000)->create();
        $this->command->info('Записи созданы!');
    }
}
