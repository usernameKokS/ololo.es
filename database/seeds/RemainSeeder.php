<?php

use Illuminate\Database\Seeder;
use App\Remain;

class RemainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Remain::truncate();
        $news = factory(App\Remain::class, 120)->create();
        $this->command->info('Записи созданы!');
    }
}
