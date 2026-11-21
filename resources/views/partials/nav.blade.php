<nav>
    <a href="{{ route('home') }}">Főoldal</a>
    <a href="{{ route('adatbazis') }}">Adatbázis</a>
    <a href="{{ route('kapcsolat') }}">Kapcsolat</a>
    <a href="{{ route('diagram') }}">Diagram</a>

    @guest
        <a href="{{ route('login') }}">Bejelentkezés</a>
        <a href="{{ route('register') }}">Regisztráció</a>
    @endguest

    @auth
        @if(in_array(auth()->user()->role, ['regisztralt', 'admin']))
            <a href="{{ route('uzenetek.index') }}">Üzenetek</a>
        @endif

        @if(auth()->user()->role === 'admin')
            <a href="{{ route('crud.index') }}">CRUD</a>
        @endif

        <span>{{ auth()->user()->name }}</span>

        <form method="POST" action="{{ route('logout') }}" style="display:inline;">
            @csrf
            <button type="submit">Kijelentkezés</button>
        </form>
    @endauth
</nav>