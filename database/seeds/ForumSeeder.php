<?php

use Illuminate\Database\Seeder;
use App\Forum;

class ForumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Forum::truncate();
        $news = factory(App\Forum::class, 5000)->create();
        $this->command->info('Записи созданы!');
    }
}
