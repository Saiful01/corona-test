<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        for ($i = 0; $i < 1000000; $i++) {
            \App\User::create([
                'name' => "Motiur" . $i,
                'email' => "memotiur@gmail.com" . $i,
                'password' => Hash::make('123456'),
            ]);
        }


    }
}
