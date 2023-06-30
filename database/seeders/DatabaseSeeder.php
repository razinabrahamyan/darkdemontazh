<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ChermetSeeder::class);
        $this->call(CvetmetSeeder::class);
        $this->call(FaqSeeder::class);
     /*   $this->call(ServiceSeeder::class);*/
        $this->call(AdminSeeder::class);
    }
}
