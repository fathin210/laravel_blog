<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {

       return view("tasks.index", [
           "tasks" => Task::orderByDesc("id")->get()
       ]);
    }


    
    public function store(Request $request)
    {
        Task::create(
            $request->all()
        );
        
        return back();
    }

    public function edit($id)
    {
       $task = Task::where("id",$id)->first();
       return view("tasks.edit", compact("task"));
    }

    public function update(Request $request, $id)
    {
        Task::find($id)->update([
            "list" => $request->list
        ]);
        
        return redirect("tasks");
    }

    public function destroy($id)
    {
        Task::find($id)->delete();
        return back();
    }
}
