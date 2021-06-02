<header>
    <div class="container">
        <a class="navbar-brand" href="/">PassenOpJeDier.nl</a>

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('pets*') ? 'active' : '' }}" href="/pets">Huisdieren</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('orders*') ? 'active' : '' }}" href="/orders">Bestellingen</a>
            </li>
            <li class="nav-item">

                @if (Auth::check())
                    <a href="{{ route('user.show', Auth::user()) }}"
                        class="nav-link {{ request()->is('user*') ? 'active' : '' }}">Huisdier-profiel</a>
                @else
                    <a href="/login" class="nav-link">Log in</a>
                @endif
            </li>
            @if (Auth::check())
                @if (Auth::user()->admin)
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('admin*') ? 'active' : '' }}" href="/admin">Admin</a>
                    </li>
                @endif
                @if (Auth::user()->sitter)
                    <li class="nav-item">
                        <a href="{{ route('sitters.show', Auth::user()->sitter) }}" class="nav-link">Oppas-profiel</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('sitters.create') }}" class="btn btn-primary">Oppasser worden</a>
                    </li>
                @endif
            @endif
        </ul>
    </div>
</header>
