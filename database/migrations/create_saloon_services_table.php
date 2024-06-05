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
        Schema::create('saloon_services', function (Blueprint $table) {
            $table->id();
            $table->text('title');    
            $table->text('service_type');    
            $table->text('desc');    
            $table->text('price');    
            $table->text('duration');    
            $table->text('omnibus_price');    
            $table->integer('saloon_id');    
            $table->integer('service_id');    
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saloon_services');
    }
};
