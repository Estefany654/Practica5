<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::orderBy('id', 'DESC')->paginate(10);
        return view('tasks.index', compact('tasks'));
        
        //$authors = Author::orderBy('id', 'DESC')->paginate(5);
        //return view('authors.index', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $request->state= 'waiting';
        $request->validate([
            'name' => 'required|unique:tasks|max:100',
            'description'=> 'max:100',
            'state' ,
            'register_date' ,
            'finished_date' ,
            'change_date',
        ]);
        
        $task = Task::create([
            'name' => $request->name,
            'description' => $request->description,
            'state' => $request->state,
            'register_date' => $request->register_date,
            'finished_date' => $request->finished_date,
            'change_date' => $request->register_date,
        ]);
       
        $task->save();

        return redirect()->route('tasks.index')->with('success', 'Item added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        
        $request->validate([
            'name' => 'required|max:100',
            'description'=> 'max:100',
            'state' ,
            'register_date' ,
            'finished_date' ,
            'change_date',
        ]);
        $task->fill([
            'name' => $request -> name,
            'description' => $request -> description,
            'state' => $request -> state,
            'register_date' => $request -> register_date,
            'finished_date' => $request -> finished_date,
            'change_date' => $request -> change_date,

        ]);
        $task->save();
        return redirect()->route('tasks.index')->with('success', 'Item updated');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $task->state = "removed";
        $task->save();
        return redirect()->route('tasks.index');
    }
}
