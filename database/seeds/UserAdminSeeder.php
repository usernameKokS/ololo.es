<?php

use Illuminate\Database\Seeder;
use App\User;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'email' => 'user1@user.com',
            'entity' => true,
        	'password' => bcrypt('password')
        ]);

        // $user = User::create([
        //     'email' => 'user2@user.com',
        //     'entity' => false,
        // 	'password' => bcrypt('password')
        // ]);

        // $user = User::create([ 
        //     'entity' => true,
        // 	'email' => 'got26days@gmail.com',
        // 	'password' => bcrypt('password')
        // ]);
    }
}
