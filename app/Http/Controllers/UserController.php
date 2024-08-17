<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{

   public function login(Request $request){
    return view('Login.login');
 }
 public function loginRequest(Request $request){

     $data=$request->validate([
        'email'=>'required|email',
        'password'=>'required'
     ]);

     if(Auth::attempt($data)){
        return view('Login.dashboard');
     }
 }



   public function register(Request $request){
     return view('Login.register');
   }
   public function registerRequest(Request $request){
    //dd($request);
      $data= $request->validate([
        'name'=>'required',
        'email'=>'required|email',
        'password'=>'required|confirmed',
       ]);
      $res= User::create($data);
      if($res){
        return redirect()->route('login');
      }
   }
   public function logout(){
    Auth::logout();
    return view('Login.login');
   }
}
