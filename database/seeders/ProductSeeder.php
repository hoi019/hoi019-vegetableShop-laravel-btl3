<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = [
            [
                'name' => 'Rau chân vịt',
                'image' => 'big-img-03.jpg',
                'price' => 8000,
                'category_id' => 1,
                'manufacture_id' => 3,
            ],
            [
                'name' => 'Dâu tây',
                'image' => 'instagram-img-08.jpg',
                'price' => 33000,
                'category_id' => 2,
                'manufacture_id' => 2,
            ],
            [
                'name' => 'Đu đủ',
                'image' => 'big-img-02.jpg',
                'price' => 27000,
                'category_id' => 4,
                'manufacture_id' => 5,
            ],
            [
                'name' => 'Cam Hàn',
                'image' => 'instagram-img-06.jpg',
                'price' => 57000,
                'category_id' => 4,
                'manufacture_id' => 3,
            ],
            [
                'name' => 'Quýt Thái',
                'image' => 'instagram-img-03.jpg',
                'price' => 39000,
                'category_id' => 4,
                'manufacture_id' => 2,
            ],
            [
                'name' => 'Quả Cherry',
                'image' => 'instagram-img-05.jpg',
                'price' => 87000,
                'category_id' => 2,
                'manufacture_id' => 1,
            ],
            [
                'name' => 'Bí ngô',
                'image' => 'instagram-img-07.jpg',
                'price' => 63000,
                'category_id' => 1,
                'manufacture_id' => 2,
            ],
            [
                'name' => 'Cà chua',
                'image' => 'gallery-img-02.jpg',
                'price' => 17000,
                'category_id' => 4,
                'manufacture_id' => 5,
            ],
            [
                'name' => 'Đỗ xanh',
                'image' => 'gallery-img-08.jpg',
                'price' => 21000,
                'category_id' => 3,
                'manufacture_id' => 1,
            ],
            [
                'name' => 'Đỗ đỏ',
                'image' => 'gallery-img-04.jpg',
                'price' => 38000,
                'category_id' => 3,
                'manufacture_id' => 4,
            ],
        ];

        DB::table('products')->insert($product);
    }
}