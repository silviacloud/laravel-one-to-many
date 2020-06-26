<header>

  <a href="{{route('new_home')}}">EMPLOYEES</a>

  @if (Route::has('login'))
      <div class="top-right links">
          @auth
              <a href="{{url('/home')}}">HOME</a>
          @else
              <a href="{{ route('login') }}">Login</a>

              @if (Route::has('register'))
                  <a href="{{ route('register') }}">Register</a>
              @endif
          @endauth
      </div>
  @endif

</header>
