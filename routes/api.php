<?php

use App\Http\Controllers\Api\TeacherController;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


//กำหนด route api ไปที่ไฟล์ TeacherController
Route::resource('teacher',TeacherController::class);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login',[AuthController::class,'login']);

Route::group(['middleware' => ['auth:sanctum',]],
        function(){
            Route::resource('teacher',TeacherController::class);
            
            Route::post('logout',[AuthController::class,'logout']);
        }
);