<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Location;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){

      $employees = Employee::all();

      return view('new_home', compact('employees'));
    }

    public function show($id){

      $employee = Employee::findOrFail($id);

      return view('show_employee', compact('employee'));
    }

    public function edit($id){

      $employee = Employee::findOrFail($id);
      $locations = Location::all();

      return view('edit_employee', compact('employee', 'locations'));
    }

    public function update(Request $request, $id){

        $validatedData = $request -> validate([

        'firstname'=>'required',
        'lastname'=>'required',
        'date_of_birth'=>'required',
        'role'=>'required',
        'locations' => 'nullable|array'
        ]);

        // dd($validatedData);

        $employee = Employee::findOrFail($id);

      $employee['firstname'] = $validatedData['firstname'];
      $employee['lastname'] = $validatedData['lastname'];
      $employee['date_of_birth'] = $validatedData['date_of_birth'];
      $employee['role'] = $validatedData['role'];

      $employee -> save();

      $employee -> locations() ->sync($validatedData['locations']);

      return redirect() -> route('new_home');
    }
}
