<!-- Top Navigation -->

<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">{{ config('app.name', 'Quiz') }}</a>

<ul class="nav px-3">

    @guest
        <li class="nav-item text-nowrap"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
        <li class="nav-item text-nowrap"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
    @else
        <li class="nav-item text-nowrap"><a class="nav-link" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout {{ Auth::user()->name }}
            </a></li>
    @endguest

</ul>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</nav>

