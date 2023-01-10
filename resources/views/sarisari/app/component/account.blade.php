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