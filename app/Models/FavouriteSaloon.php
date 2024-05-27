<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class FavouriteSaloon extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = ['deleted_at']; // Ensure deleted_at column is treated as a Carbon instance

    
   
    public function Saloon()
    {
        return $this->belongsTo(Saloon::class);
    }
   
    public function User()
    {
        return $this->belongsTo(User::class);
    }

}
