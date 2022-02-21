<?php

use Illuminate\Database\Seeder;
use App\Video;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if ($this->command->confirm('Очистить таблицу?')) {

            Video::truncate();

            $this->command->line("Таблица успешно очищена!");
        }

        $count = (int)$this->command->ask('Как много записей создать?', 14);

        $this->command->info("Создание {$count} записей.");

        $news = factory(App\Video::class, $count)->create();

        $this->command->info('Записи созданы!');
    }
}
