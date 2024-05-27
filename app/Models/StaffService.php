<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class StaffService extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = ['deleted_at']; // Ensure deleted_at column is treated as a Carbon instance

    
    public function SaloonService()
    {
        return $this->belongsTo(SaloonService::class);
    }
    
    public function Staff()
    {
        return $this->belongsTo(Staff::class);
    }
    
}
