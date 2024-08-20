<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    public function Province(){
        return $this->hasMany(Province::class, 'region_id','id');
    }

    
    
    // 1 : M 
    public function Country(){
        return $this->belongsTo(Country::class,'country_id','id');
    }
    
    
}
