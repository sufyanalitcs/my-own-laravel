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
        Schema::create('saloon_times', function (Blueprint $table) {
            $table->id();
            $table->text('days');    
            $table->text('day_start');    
            $table->text('day_end');    
            
            $table->text('break_start');    
            $table->text('break_end');    

            $table->int('saloon_id');    
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saloon_times');
    }
};
