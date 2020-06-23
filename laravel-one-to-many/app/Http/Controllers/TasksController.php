<?php

namespace App\Http\Controllers;

use App\Task;
use App\Employee;
use Illuminate\Http\Request;


class TasksController extends Controller
{
    public function index(){

      $tasks = Task::all();

      return view('home', compact('tasks'));
    }

    public function edit($id){

      $task = Task::findOrFail($id);
      $employees = Employee::all();

      return view('edit', compact('task', 'employees'));
    }

    public function update(Request $request, $id){

      $validatedDAta = $request -> validate([

        'name'=>'required',
        'description'=>'required',
        'deadline'=>'required',
        'employee_id'=>'required'
      ]);

      // dd($validatedDAta);

      Task::whereId($id) -> update($validatedDAta);

      return redirect()->route('home');
    }


}
