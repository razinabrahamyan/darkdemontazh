<?php

namespace Database\Seeders;

use App\Models\Cvetmet;
use Illuminate\Database\Seeder;

class CvetmetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prices = [
            [
                'price' => 635 ,
                'category' => 'Медь',
            ],
            [
                'price' => 310 ,
                'category' => 'Бронза',
            ],
            [
                'price' => 290 ,
                'category' => 'Латунь',
            ],
            [
                'price' => 125 ,
                'category' => 'Алюминий',
            ],
            [
                'price' => 93 ,
                'category' => 'Нержавейка',
            ],
            [
                'price' => 67 ,
                'category' => 'Аккумуляторы',
            ],
            [
                'price' => 495 ,
                'category' => 'Лом кабеля',
            ],
            [
                'price' => 70 ,
                'category' => 'Магний',
            ],
            [
                'price' => 125 ,
                'category' => 'Свинец',
            ],
            [
                'price' => 190 ,
                'category' => 'Титан',
            ],
            [
                'price' => 45 ,
                'category' => 'Электродвигатели',
            ],

        ];
        Cvetmet::insert($prices);
    }
}
