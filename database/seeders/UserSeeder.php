<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            [
                'name' => 'User',
                'user_role' => 'User',
                'email' => 'user@email.com',
                'password' => Hash::make('password'),
            ],

            [
                'name' => 'Admin',
                'user_role' => 'Admin',
                'email' => 'admin@email.com',
                'password' => Hash::make('password'),
            ]

        ]);
    }
}
