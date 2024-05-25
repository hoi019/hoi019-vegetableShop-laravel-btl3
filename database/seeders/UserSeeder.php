<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Hội đz',
                'email' => 'admin@email.com',
                'is_admin' => 1,
                'password' => bcrypt('88888888'),
            ],
            [
                'name' => 'Người dùng',
                'email' => 'user@email.com',
                'is_admin' => 0,
                'password' => bcrypt('88888888'),
            ],
        ];

        DB::table('users')->insert($user);
    }
}