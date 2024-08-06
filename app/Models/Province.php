<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;
    // one to many
    public function Teacher(){
        return $this ->hasMany(Teacher::class,'province_id','id');
    }
    public function Region(){
        return $this ->belongsTo(Region::class,'region_id','id');

    }
}
