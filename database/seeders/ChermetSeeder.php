<?php

namespace Database\Seeders;

use App\Models\Chermet;
use Illuminate\Database\Seeder;

class ChermetSeeder extends Seeder
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
                'price' => 29500,
                'category' => '3А',
                'description' => "Сталь, габаритные размеры не более 1500х500х500, толщина стенки от 4 мм",
            ],
            [
                'price' => 29000,
                'category' => '5А',
                'description' => 'Сталь, габаритные размеры не регламентируются, толщина стенки от 4 мм',
            ],
            [
                'price' => 28700,
                'category' => '12А',
                'description' => 'Сталь (жесть), толщина менее 4 мм',
            ],
            [
                'price' => 29200,
                'category' => 'MIX',
                'description' => 'Cмешанный металлолом 3А, 5А, 12А без оцинковки',
            ],
            [
                'price' => 26500,
                'category' => '12AC',
                'description' => 'Сталь оцинкованная',
            ],
            [
                'price' => 28500,
                'category' => '17A',
                'description' => 'Габаритный чугун, размеры не более 800х500х500',
            ],
            [
                'price' =>  28200,
                'category' => '20A',
                'description' => 'Негабаритный чугунный лом',
            ],
            [
                'price' => 29700,
                'description' => 'Рельсовый лом',
            ],
            [
                'price' => 25500,
                'description' => 'Проволока, трос, стружка',
            ],

        ];
        foreach ($prices as $price){
            Chermet::create($price);
        }
    }
}
