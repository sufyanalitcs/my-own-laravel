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
            $table->text('business_profile');    
            $table->text('business_contact');    
            $table->text('address');    
            $table->text('recommended');    
            $table->text('social_links');    
            $table->text('about');    
            $table->int('city_id');    
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
