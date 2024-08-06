<?php

use App\Models\Country;
use App\Models\Provinces;
use App\Models\Region;
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

//คำสั่งในการ debug ข้อมูล
      //query 
     // $Model = Province::all();
    // dd($Model[0]->student[0]->name);
   
    //  $Model = Country::all();
   // dd($Model[0]->region);
     
   $Model = Country::all();
   dd($Model[0]->Region[0]->Province[0]->Teacher[0]);

    return view('welcome');
});
