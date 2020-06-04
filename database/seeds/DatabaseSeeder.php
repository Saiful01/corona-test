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


        \App\User::create([
            'name' => "Asad",
            'email' => "admin@gmail.com",
            'password' => Hash::make('123456'),
        ]);


    }
}
