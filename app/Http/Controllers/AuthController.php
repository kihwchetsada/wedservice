<?php

namespace App\Http\Controllers;

//use Dotenv\Validator;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    
    public function login(Request $request){
    //  dd($request->email. "  " . $request->password);

    $validator = Validator::make($request->all(),[
    'email' => 'required|email',
    'password' => 'required|min:6'
    ]);

    
        if($validator->fails()){
            return response()->json([
                'data' => $request->email,
                'status_code' => 400,
                'message' => 'Bad Request',
            ]);
        }else{
            $data = request(['email','password']);
            // dd($data);

            if(Auth::attempt($data)){
                $user = User::where('email',$request->email)->first();

                $token = $user -> createToken('authToken')->plainTextToken;

                return response()->json([
                  "message" => "login sucss",
                  "status code" => "200",
                  "user infomation" => $user,
                  "token" => $token,
                ]);
               // dd("Login สำเร็จ");
            }else{
                dd("ไม่พบผู้ใช้");
            }
        
        }
    }
    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'message' =>'Logout Complete',
        ]);
    }
}
