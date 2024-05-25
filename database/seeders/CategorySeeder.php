<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            [
                'name' => 'Rau củ',
            ],
            [
                'name' => 'Hoa quả',
            ],
            [
                'name' => 'Hạt khô',
            ],
            [
                'name' => 'Trái cây',
            ],
            [
                'name' => 'Sinh tố',
            ],
        ];

        DB::table('categories')->insert($category);
    }
}