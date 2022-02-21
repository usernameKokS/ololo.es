<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();

        $news = factory(App\Category::class, 10)->create();
        $this->command->info('Записи созданы!');
    }
}
