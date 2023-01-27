<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = DB::table('tasks')->get();
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
            'list' => $request ->list,
        ]);
    }



}
