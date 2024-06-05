<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Saloon;

class SaloonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Saloon::create([
            'business_name' => 'Jackie’s Divine Stylism' ,
            'your_name' => 'Jackie',
            'business_profile' => 'jackie' ,
            'business_contact' => '(210) 788-2069' ,
            'address' => '1209 Woodland Oaks Dr., Room 7, Schertz, 78154' ,
            'recommended' => 'true' ,
            'social_links' => '{ "insta" : "https://www.instagram.com/jackiesdivinestylism"   , 
                                "fb" : "https://www.facebook.com/JackiesDivineStylism/"  ,
                                "web" : "https://jackiesdivinestylism.com/"  
                            }' ,
            'about' => "Jackie's Divine Stylism is been in business since June 2010. We offer Hair, Make-up, Nail services and portrait photography. Our loyal customers come to us for new looks and hairstyle updates to highlight their inner and outer beauty. We don't put down our styling tools, until magic happens and make your headshot look fabulous." ,
            'city_id' => '1' ,
        ]);

        Saloon::create([
            'business_name' => '💈Hair Loss Solutions- Non Surgical Hair Replacement Services 💈' ,
            'your_name' => 'Hair',
            'business_profile' => 'hair_saloon' ,
            'business_contact' => '(484) 896-0859' ,
            'address' => '12301 Lake Underhill Rd, Suite 126 @ Salon Lofts!, @ Salon Lofts!, Orlando, 32828' ,
            'recommended' => 'true' ,
            'social_links' => '{ "insta" : "https://www.instagram.com/yamilopr25"  }' ,
            'about' => "Hair Units Installations - Hair Replacement Services - Non Surgical - <br> Man Weaves <br> Man Units <br> Hair Units <br> Wig Shop <br> Barbering Services" ,
            'city_id' => '2' ,
        ]);





        
    }
}
