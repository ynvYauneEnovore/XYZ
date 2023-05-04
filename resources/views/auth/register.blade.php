<x-guest-layout>
<form method="POST" action="{{ route('register') }}">
    @csrf

    <div>
        <label for="name">{{ __('Name') }}</label>

        <div>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
        </div>
    </div>

    <div>
        <label for="email">{{ __('Email') }}</label>

        <div>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required>
        </div>
    </div>

    <div>
        <label for="password">{{ __('Password') }}</label>

        <div>
            <input id="password" type="password" name="password" required>
        </div>
    </div>

    <div>
        <label for="password_confirmation">{{ __('Confirm Password') }}</label>

        <div>
            <input id="password_confirmation" type="password" name="password_confirmation" required>
        </div>
    </div>

    <div>
        <label for="celular">{{ __('Celular') }}</label>

        <div>
            <input id="celular" type="text" name="celular" value="{{ old('celular') }}">
        </div>
    </div>

    <div>
        <label for="fecha_nacimiento">{{ __('Fecha de nacimiento') }}</label>

        <div>
            <input id="fecha_nacimiento" type="date" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}">
        </div>
    </div>

    <div>
        <label for="codigo_ciudad">{{ __('Código de Ciudad') }}</label>

        <div>
            <input id="codigo_ciudad" type="text" name="codigo_ciudad" value="{{ old('codigo_ciudad') }}">
        </div>
    </div>

    <div>
        <label for="role">{{ __('Role') }}</label>

        <div>
            <input id="role" type="text" name="role" value="{{ old('role') }}">
        </div>
    </div>

    <div>
        <button type="submit">
            {{ __('Register') }}
        </button>
    </div>
</form>
</x-guest-layout>
