@extends('layouts.layout')


@section('content')

  <main>
    <h1>Employees</h1>



      @foreach ($tasks as $task)


          <h3>TASK: {{$task -> name}}</h3>
          <p>Description: {{$task -> description}}</p>
          <p>Deadline: {{$task -> deadline}}</p>

          <p>Employee: {{$task -> employee -> firstname}} {{$task -> employee -> lastname}}</p>

          <a href="{{route('edit', $task['id'])}}">EDIT</a>
      @endforeach






  </main>

@endsection
