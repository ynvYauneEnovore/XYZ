<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista de Usuarios:') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                   <img src="/img/add.png" width="30"/>
                </button>
                <hr class="border border-success border-3 opacity-75">
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header bg-dark">
                        <h1 class="modal-title fs-5 text-white" id="staticBackdropLabel">Agregar Usuario</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body bg-light">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name">Nombre:</label>
                            <input type="text" name="name" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password">Contraseña:</label>
                            <input type="password" name="password" id="password" required>
                        </div>
                        <div class="mb-3">
                            <label for="celular">Celular:</label>
                            <input type="tel" name="celular" id="celular" pattern="[0-9]{10}" required>
                        </div>
                        <div class="mb-3">
                            <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" required>
                        </div>
                        <div class="mb-3">
                            <label for="cedula">Cédula:</label>
                            <input type="text" name="cedula" id="cedula" required>
                        </div>
                        <div class="mb-3">
                            <label for="codigo_ciudad">Código de Ciudad:</label>
                            <input type="number" name="codigo_ciudad" id="codigo_ciudad" required>
                        </div>
                        <button class="btn btn-success text-dark" type="submit">Crear Usuario</button>
                    </form>
                    </div>
                    <div class="modal-footer bg-dark">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                    </div>
                </div>
                </div>
            <table class="table table-dark table-striped">
                <thead>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Celular</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Acción</th>
                </thead>

                <tbody>
    @foreach($users as $user)
    <tr>
        <th>{{ $user->id }}</th>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->celular }}</td>
        <td>{{ $user->fecha_nacimiento }}</td>
        <td>{{ $user->role }}</td>
        <td>
            <div class="d-grid gap-2 d-md-flex justify-content-center">
                <button class="btn btn-success me-md-2" type="button">Editar</button>
                <button class="btn btn-danger" type="button">Borrar</button>
                </div>
        </td>
    </tr>
    @endforeach
</tbody>

                </table>

                <div class="d-flex justify-content-center bg-light">
                    {{ $users->links() }}
                </div>

            </div>
        </div>
    </div>
</x-app-layout>

