<x-mainpage>
    <h1>Regisztráció</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/register">
        @csrf
        <div>
            <label>Név:</label>
            <input type="text" name="name" value="{{ old('name') }}" required>
        </div>
        <div>
            <label>E-mail:</label>
            <input type="email" name="email" value="{{ old('email') }}" required>
        </div>
        <div>
            <label>Jelszó:</label>
            <input type="password" name="password" required>
        </div>
        <div>
            <label>Jelszó megerősítése:</label>
            <input type="password" name="password_confirmation" required>
        </div>
        <button type="submit">Regisztráció</button>
    </form>
</x-mainpage>