<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Saloon extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = ['deleted_at']; // Ensure deleted_at column is treated as a Carbon instance

   
    public function City()
    {
        return $this->belongsTo(City::class);
    }
   
    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Staffs()
    {
        return $this->hasMany(Staff::class);
    }

    
    public function Services()
    {
        return $this->hasMany(Service::class);
    }


     


}
