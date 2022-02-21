<?php

use Illuminate\Database\Seeder;
use App\Tariff;
class TariffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tariff::truncate();
        $news = factory(App\Tariff::class, 120)->create();
        $this->command->info('Записи созданы!');
    }
}
