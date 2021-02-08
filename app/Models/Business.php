<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(\App\Models\Category::class);
    }

    public function reviews(){
        return $this->hasMany(\App\Models\Review::class);
    }
}
