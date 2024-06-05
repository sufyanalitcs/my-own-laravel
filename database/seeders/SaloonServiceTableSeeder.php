<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SaloonService;

class SaloonServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        SaloonService::create([
            'title' => 'Makeup' ,
            'service_type' => 'makeup' ,
            'desc' => 'makeup' ,
            'price' => 'makeup' ,
            'duration' => 'makeup' ,
            'omnibus_price' => 'makeup' ,
            'saloon_id' => '1' ,
            'service_id' => '1' ,
        ]);

         
    }
}
