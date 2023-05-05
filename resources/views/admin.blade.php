<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Creación de Usuarios:') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-dark bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-dark">
                <form id="user-form">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña:</label>
                        <input type="password" class="form-control" id="password" name="password" minlength="8" required>
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Verificación de Contraseña:</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Nombre:</label>
                        <input type="text" class="form-control" id="name" name="name" maxlength="100" required>
                    </div>
                    <div class="form-group">
                        <label for="celular">Número Celular:</label>
                        <input type="tel" class="form-control" id="celular" name="celular" pattern="[0-9]{10}">
                    </div>
                    <div class="form-group">
                        <label for="cedula">Cédula:</label>
                        <input type="text" class="form-control" id="cedula" name="cedula" maxlength="11" required>
                    </div>
                    <div class="form-group">
                        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                        <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
                    </div>
                    <div class="form-group">
                        <label for="codigo_ciudad">Código de Ciudad:</label>
                        <input type="number" class="form-control" id="codigo_ciudad" name="codigo_ciudad" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

