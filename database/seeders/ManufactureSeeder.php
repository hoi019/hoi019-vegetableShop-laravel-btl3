<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ManufactureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manufacture = [
            [
                'name' => 'FreshVegetable',
                'email' => 'local@email.com'
            ],
            [
                'name' => 'Compotery',
                'email' => 'litavity@email.com'
            ],
            [
                'name' => 'FreshMilk',
                'email' => 'milkfresh@email.com'
            ],
            [
                'name' => 'Vitally',
                'email' => 'taivilyy@email.com'
            ],
            [
                'name' => 'ZooMood',
                'email' => 'zootoo@email.com'
            ],
        ];

        DB::table('manufactures')->insert($manufacture);
    }
}