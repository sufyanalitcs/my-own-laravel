<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('saloons', function (Blueprint $table) {
            $table->id();
            $table->text('business_name');    
            $table->text('your_name');    
            $table->text('business_profile');    
            $table->text('business_contact');    
            $table->text('address')->nullable();    
            $table->text('street_address_1')->nullable();    
            $table->text('street_address_2')->nullable();    
            $table->text('zip_code')->nullable();    
            $table->text('team')->nullable();    
            $table->text('recommended')->nullable();    
            $table->text('social_links')->nullable();    
            $table->text('work_place')->nullable();    
            $table->text('about');    
            $table->integer('city_id');    
            $table->softDeletes();
            $table->timestamps();
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saloons');
    }
};
