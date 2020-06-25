@extends('layouts.layout')

@section('content')

  <main>

    <h1>EMPLOYEE N°: {{$employee['id']}}</h1> <br>

    <form class="" action="{{route('update_employee', $employee['id'])}}" method="post">
      @csrf
      @method('POST')

      <label for="firstname">FIRSTNAME</label>
      <input type="text" name="firstname" value="{{$employee['firstname']}}"><br>

      <label for="lastname">LASTNAME</label>
      <input type="text" name="lastname" value="{{$employee['lastname']}}"><br>

      <label for="date_of_birth">DATE OF BIRTH</label>
      <input type="text" name="date_of_birth" value="{{$employee['date_of_birth']}}"><br>

      <label for="role">ROLE</label>
      <input type="text" name="role" value="{{$employee['role']}}"><br>

      <label for="locations[]">LOCATIONS:</label> <br>

        @foreach ($locations as $location)

          <input type="checkbox" name="locations[]" value="{{$location['id']}}"
          
            @foreach ($employee -> locations as $emplocation)
              @if($location -> id == $emplocation -> id)
                checked
              @endif
            @endforeach

          > {{$location['state']}} <br><br>

        @endforeach

      <input type="submit" name="submit" value="UPDATE">

    </form>

  </main>

@endsection
