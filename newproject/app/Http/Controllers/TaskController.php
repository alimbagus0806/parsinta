<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = DB::table('tasks')->orderBy('id', 'desc')->get();
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
        DB::table('tasks')->insert([
            'list' => $request->list,
        ]);
// dd ("submitted");
        return redirect('tasks');
    }

    public function edit($id)
    {

        // dd($id);
       $task = DB::table('tasks')->where('id', $id)->first();
       
       return view('tasks.edit', ['task' => $task]);
    }

    public function update(Request $request, $id)
    {

        // dd($id);
       $task = DB::table('tasks')->where('id', $id)->update(['list'=>$request->list]);
       
       return redirect('tasks');

    }

}
