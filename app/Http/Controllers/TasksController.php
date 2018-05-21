<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;
use Calendar;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
 {
   return view('admin.tasks.index')->with('tasks', Task::all());

 }

 public function create()
 {
    // return view('admin.tasks.create');
    $tasks = Task::all();

    if($tasks->count() == 0)

    {
      Session::flash('info', 'you must have some pakcges before creating posts');

        return redirect()->back();
    }

    return view('admin.tasks.create')->with('tasks', $tasks);

 }

 public function store(Request $request)
 {
   $tasks = Task::create([

     'name' => $request->name,
     'description' => $request->description,
     'task_date' => $request->task_date,

   ]);


   return redirect()->back();

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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
