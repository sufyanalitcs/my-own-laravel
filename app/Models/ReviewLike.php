<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ReviewLike extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = ['deleted_at']; // Ensure deleted_at column is treated as a Carbon instance


    public function Review()
    {
        return $this->belongsTo(Review::class);
    }
   
    public function User()
    {
        return $this->belongsTo(User::class);
    }

}
