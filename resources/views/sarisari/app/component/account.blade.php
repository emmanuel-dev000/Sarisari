{{-- <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{ Auth::user()->name }}
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="{{ url('/sarisari/'.Auth::user()->name.'/profile') }}">Profile</a>
      <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault(); 
            document.getElementById('logout-form').submit();">
            Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</li> --}}

@if (Route::has('login'))
    @auth
        <li class="nav-item">
            <a href="{{ url('/sarisari/'.Auth::user()->name.'/profile') }}" class="nav-link"> {{ Auth::user()->name}} </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/sarisari/'.Auth::user()->name.'/profile') }}" class="nav-link" onclick="event.preventDefault(); 
                document.getElementById('logout-form').submit();"> Logout </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    @else
        <li class="nav-item">
            <a href="{{ route('login') }}" class="nav-link">Log in</a>
        </li>

        @if (Route::has('register'))
            <li class="nav-item">
                <a href="{{ route('register') }}" class="nav-link">Register</a>
            </li>
        @endif
    @endauth
@endif