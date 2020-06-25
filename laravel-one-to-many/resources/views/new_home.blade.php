@extends('layouts.layout')

@section('content')

  <main>
    <h1>Employees</h1>

    @foreach ($employees as $employee)

      <h3> <a href="{{route('show_employee', $employee['id'])}}">{{$employee['firstname']}} {{$employee['lastname']}}</a></h3>

    @endforeach
  </main>

@endsection
