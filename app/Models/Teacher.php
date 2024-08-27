<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;


  /*   protected $fillable = [
        'title_id',
        'name',
        'surname',
        'email',
        'province_id'
     ];
     */
     protected $guarded = [];

    public function Province(){
        return $this->belongsTo(Province::class,'province_id','id');
    }
}
