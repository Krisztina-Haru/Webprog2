<nav>
    <a href="/">Főoldal</a>
    <a href="/etlap">Étlap</a>

    @if (Auth::check())
        <a href="/user">User</a>

        @if (Auth::user()->role == 1)
            <a href="/admin">Admin</a>
        @endif

        <form method="POST" action="/logout" style="display:inline;">
            @csrf
            <button type="submit">Logout</button>
        </form>
    @else
        <a href="/login">Bejelentkezés</a>
        <a href="/register">Regisztráció</a>
    @endif
</nav>