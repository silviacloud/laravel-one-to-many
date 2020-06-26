@extends('layouts.layout')

@section('content')

  <main>

    <h1>EMPLOYEE N°: {{$employee['id']}}</h1> <br>
    <h3>{{$employee['firstname']}} {{$employee['lastname']}}</h3>

    <p>DATE OF BIRTH: {{$employee['date_of_birth']}}</p>
    <p>ROLE: {{$employee['role']}}</p>

    @if($employee -> tasks -> count())
      <p>TASKS:
        @foreach ($employee-> tasks as $task)

          {{$task -> name}}

        @endforeach
      </p>
    @else
      <p>TASKS: none</p>
    @endif

    @if(count($employee -> locations))
      <p>LOCATIONS:
        @foreach ($employee-> locations as $location)

          {{$location -> street}} - {{$location -> city}} ({{$location -> state}});

        @endforeach
      </p>
    @else
      <p>LOCATIONS: none</p>
    @endif

    @auth
      <a href="{{route ('edit_employee', $employee['id'])}}">EDIT</a>
      <span><a >DELETE</a></span>
    @else
      <a href="{{route ('login')}}">LOGIN</a>
    @endauth
  </main>

@endsection
