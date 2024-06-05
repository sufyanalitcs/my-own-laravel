<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Category::create([
            'name' => 'Makeup' ,
            'img' => 'makeup' 
        ]);
        Category::create([
            'name' => 'Hair Salon' ,
            'img' => 'hair_salon' 
        ]);
        
        Category::create([
            'name' => 'Barbershop' ,
            'img' => 'barbershop' 
        ]);
        
        Category::create([
            'name' => 'Nail Salon' ,
            'img' => 'nail_salon' 
        ]);
        
        Category::create([
            'name' => 'Skin care ' ,
            'img' => 'skin_care ' 
        ]);

        
        Category::create([
            'name' => 'Brows & Lashes  ' ,
            'img' => 'brows_&_lashes  ' 
        ]);

        Category::create([
            'name' => 'Massage' ,
            'img' => 'massage' 
        ]);
        
        
        Category::create([
            'name' => 'Wellness & Day Spa' ,
            'img' => 'qellness_&_day_spa' 
        ]);
        
        
        Category::create([
            'name' => 'Braids & Locs' ,
            'img' => 'braids_&_locs' 
        ]);
        
        
        Category::create([
            'name' => 'Tattoo Shop' ,
            'img' => 'tattoo_shop' 
        ]);
        
        
        Category::create([
            'name' => 'Aesthetic Medicine' ,
            'img' => 'aesthetic_medicine' 
        ]);
        
        
        Category::create([
            'name' => 'Hair Removal' ,
            'img' => 'hair_removal' 
        ]);
        
        
        Category::create([
            'name' => 'Home Services' ,
            'img' => 'home_Services' 
        ]);
        
        
        Category::create([
            'name' => 'Piercing' ,
            'img' => 'piercing' 
        ]);

        
        Category::create([
            'name' => 'Dental & Orthodontics' ,
            'img' => 'dental_&_orthodontics' 
        ]);
        
        Category::create([
            'name' => 'Health & Fitness' ,
            'img' => 'health_&_fitness' 
        ]);
        
        Category::create([
            'name' => 'Professional Services' ,
            'img' => 'professional_services' 
        ]);
        
        Category::create([
            'name' => 'Other' ,
            'img' => 'other' 
        ]);

 

    }
}
