<?php

namespace App\Http\Controllers;
use App\Models\Task;

use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Handle the incoming request.
     */
    // public function __invoke()
    // {
    //     return view('Home');
    // }
    // public function text(){
    //     return "<h1>Text Function called</h1>";
    // 6}
    public function create(){
        return view('task.task_form');
    }
    public function store(Request $request){
       $request->validate([
        'title'=>'required',
        'description'=>'required',
        'date'=>'required',
        'status'=>'required'
       ]);

    //    $task = Task::findOrFail($id);
    //    $task->user()->name;
    //dd($request->all());
       Task::create($request->all());



       return redirect()->route('list');
    }
    public function index(){
        // $data=Task::where("title","test")->get();
        $data=Task::latest()->get();

       // $data = Task::where('id','2')->pluck('title');






        return view('task.task_details',compact('data'));
    }
    public function edit(string $id){
        $data=Task::find($id);
        return view('task.task_edit',compact('data'));
    }
    public function update(Request $request,string $id){
        Task::where('id',$id)->update($request->except('_token'));
        return redirect()->route('list');
    }
    public function destroy(string $id){
       $data= Task::find($id);
       if($data){
        $data->delete();

       }
       return redirect()->back();
    }
    public function show(string $id){
         $data=Task::find($id);

        // orderBy()

       // dd($data);



        return view('task.task_list',compact('data'));
    }

}
