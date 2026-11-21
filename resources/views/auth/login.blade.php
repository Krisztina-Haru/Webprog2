<x-mainpage>
    <h1>Bejelentkezés</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/login">
        @csrf
        <div>
            <label>E-mail:</label>
            <input type="email" name="email" value="{{ old('email') }}" required>
        </div>
        <div>
            <label>Jelszó:</label>
            <input type="password" name="password" required>
        </div>
        <button type="submit">Belépés</button>
    </form>
</x-mainpage>