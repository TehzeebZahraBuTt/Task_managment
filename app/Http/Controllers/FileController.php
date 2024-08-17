<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Files;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data=Files::get();

        // return view('file.show-file',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('file.file-upload');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

       $request->validate([
         'file'=>'required|mimes:jpg,png,jpeg',
         'name'=>'required'

       ]);
       $file_name=$request->file->getClientOriginalName();
      $path=$request->file->storeAs('images',$file_name,'public');
     // dd($path);

      Files::create([
        'file'=>$path,
        'name'=>$request->name,
      ]);
      return redirect()->route('file.show',6)->with(
        'status','file uploaded successfully'
      );
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data=Files::get();

        return view('file.show-file',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data=Files::Find($id);

        $data->delete();
        $img=public_path('storage/').$data->file;
        if(file_exists($img)){
           @unlink($img);
        }
        return redirect()->route('file.show',$id)->with('status','deleted successfully');
    }
}
