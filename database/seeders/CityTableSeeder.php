<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\City;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 
        City::create([
            'name' => 'Charlotte',
            'country_id' => 1
        ]);
        City::create([
            'name' => '1 Columbus',
            'country_id' => 1
        ]);
        
        City::create([
            'name' => 'Philadelphia',
            'country_id' => 1
        ]);
        
        City::create([
            'name' => 'Tampa',
            'country_id' => 1
        ]);
        
        City::create([
            'name' => 'Chicago',
            'country_id' => 1
        ]);
    }
}
