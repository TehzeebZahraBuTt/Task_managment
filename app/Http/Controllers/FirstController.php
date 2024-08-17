<?php

namespace App\Http\Controllers;

use App\Models\Student;
// use Illuminate\Contracts\View\View;
// use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function showHome(){
        return view('masterTemp');
    }
    public function showBlog(){
        return view('Blog');
    }
    public function showContact(){
        return view('Contact');
    }
    public function store(Request $request){
     $request->validate([
        'username'=>'required',
        'email'=>'required',
        'password'=>'required'
     ]);
     $student = new Student();
     $student->name=$request->username;
     $student->email=$request->email;
     //$student->password=$request->password;
     $student->save();
     return redirect()->route('home');

    }
    public function create(){
        return view('insert');
    }
    public function index(){
        $data=Student::latest()->get();
        return view('Home', compact('data'));
    }
    public function edit(string $id){
        $data=Student::find($id);
        return view('Blog',compact('data'));
    }
}
