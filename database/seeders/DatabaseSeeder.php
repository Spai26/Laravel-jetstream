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
        $this->call( StatusSeeder::class);
        $this->call(DepartamentSeeder::class);
        $this->call(ProvinceSeeder::class);
        $this->call(DistricSeeder::class);      
    }
}
