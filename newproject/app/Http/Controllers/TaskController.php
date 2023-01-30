<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Task;
// use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('id', 'desc')->get();
        return view('tasks.index', compact('tasks'));
    }

    // public function show(int $request)
    // {
    //     $tasks =DB::table('tasks')->where('id','=',$request);
    //     dd($tasks);
    // }

    public function create()
    {
        return view('tasks.create');
    }


    public function store(Request $request)
    {
        Task::create($request->all());
        // Task::create([
        //     'list' => $request->list,
        // ]);
// dd ("submitted");
        return redirect('tasks');
    }

    public function edit(Task $task)
    {

        // dd($id);
    //    $task = Task::where('id', $id)->first();
        // $task = Task::find($id);
       return view('tasks.edit', ['task' => $task]);
    }

    public function update(Request $request, $id)
    {

        // dd($id);
        Task::find($id)->update(['list'=>$request->list]);
       
       return redirect('tasks');

    }
    public function destroy($id)
    {

        // dd($id);
     Task::find($id)->delete();
       
    return back();

    }

    

}
