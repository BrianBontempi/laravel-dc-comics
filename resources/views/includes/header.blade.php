<header>
    <figure>
        <img id="logo" src="{{ asset('img/dc-logo.png') }}" alt="Logo dc">
    </figure>
    <nav>
        <ul>
            <li>
                <a href="{{ url('/')}}" class=" {{ request()->routeIs('home') ? 'active' : '' }}">home</a>
            </li>
            <li><a href="{{ route('comics.index')}}" class=" {{ request()->routeIs('comics.index') ? 'active' : '' }}">comics</a></li>
            <li><a href="{{ route('movies')}}" class=" {{ request()->routeIs('movies') ? 'active' : '' }}">movies</a></li>
            <li><a>tv</a></li>
            <li><a>games</a></li>
            <li><a>Collectibles</a></li>
            <li><a>videos</a></li>
            <li><a>fans</a></li>
            <li><a>news</a></li>
            <li><a>shop</a></li>
        </ul>
    </nav>
</header>
<div class="jumbotron"></div>
