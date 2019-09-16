<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //reset the users table
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('users')->truncate();
        
        //generate 3 users
        DB::table('users')->insert([
            [
                'name' => "Jhon Doe",
                'email' => "JhonDoe@test.com",
                'password' => bcrypt('secret')

            ],
            [
                'name' => "Mounir dagana",
                'email' => "mounir.dagana@gmail.com",
                'password' => bcrypt('secret')

            ],
            [
                'name' => "David Guetta",
                'email' => "david.123@test.com",
                'password' => bcrypt('secret')

            ]
        ]);
        

    }
}
