<?php

use Illuminate\Database\Seeder;
use App\Avatar;

class AvatarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * php artisan db:seed --class=AvatarSeeder
     * @return void
     */
    public function run()
    {
        if ($this->command->confirm('Очистить таблицу?')) {

            Avatar::truncate();

            $this->command->line("Таблица успешно очищена!");
        }

        $count = (int)$this->command->ask('Как много записей создать?', 14);

        $this->command->info("Создание {$count} записей.");

        $news = factory(App\Avatar::class, $count)->create();

        $this->command->info('Записи созданы!');
    }
}
