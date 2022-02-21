<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();

        $news = factory(App\Post::class, 10)->create();
        $this->command->info('Записи созданы!');
    }
}
