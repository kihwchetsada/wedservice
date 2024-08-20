<?php

use App\Models\Country;
use App\Models\Province;
use App\Models\Provinces;
use App\Models\Region;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {


    // $Model = Country::all();
    // dd($Model[0]->Region[0]->Province[0]->Teacher[0]);
    
    $t = Teacher :: find(1);
    dd($t->Province->Region->Country);
   
    return view('welcome');
});

/*
การใช้ Query โดยใช้ ORM 
 $Model =  Student:: query()
 ->where ('province_id','1')
 ->where ('name',"LIKE",'a%')
 ->where ('surname',"LIKE",'a%')
 ->get(); 
  ****comment**** model :: where (table,id_aray)
   $Model =  Student:: query()
    ->where ('province_id','1')
    ->orwhere ('province_id','3')
    ***************
    ->whereNotBetween ('id',[20,50])
    //->where ('id','>=','20')
   // ->where ('id','<=','50')
   ->take(20) ***not where
      ->orderBy('id','desc') // มากไปน้อย desc หรือ น้อยไปมาก asc
      *****************************
    ->get(); ข้อมูลทั้งหมด //->first(); ข้อมูลอันแรก //->count(); นับจำนวนข้อมูล
    *********************
    $Model =  Province:: query()
    ->with('Teacher') // ทำรีเรชั่น
    ->whereHas('Teacher',function($query){ 
        $query->where('id','100');
    })
    ->get(); 
    
 dd($Model);
*/

//คำสั่งในการ debug ข้อมูล
      //query 
     // $Model = Province::all();
    // dd($Model[0]->student[0]->name);
   
    //  $Model = Country::all();
   // dd($Model[0]->region);
  /* ข้อ 1    
   $Model = Country::all();
   dd($Model[0]->Region[0]->Province[0]->Teacher[0]);
*/