<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Location;
use Illuminate\Http\Request;

class LogController extends Controller
{

    public function __construct(){

      $this->middleware ('auth');

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
