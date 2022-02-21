<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(AvatarSeeder::class);
        // $this->call(VideoSeeder::class);
        $this->call(UserAdminSeeder::class);
        $this->call(PostSeeder::class);

        $this->call(TariffSeeder::class);

        $this->call(RemainSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(RateSeeder::class);

        $this->call(PlaceSeeder::class);
        // $this->call(AdSeeder::class);

        $this->call(CategorySeeder::class);
        $this->call(PortalSeeder::class);

        $this->call(ForumSeeder::class);
        
    }
}
