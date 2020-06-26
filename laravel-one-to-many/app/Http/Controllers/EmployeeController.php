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

}
