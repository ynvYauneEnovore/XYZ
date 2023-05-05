<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Nuevo Correo:') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-dark">
                    <div class="row">
                        <div class="col-2">
                            <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                <button type="button" class="btn btn-success">Recibidos</button>
                                <button type="button" class="btn btn-success">Destacados</button>
                                <button type="button" class="btn btn-success">Pospuestos</button>
                                <button type="button" class="btn btn-success">Enviados</button>
                                <button type="button" class="btn btn-success">Borrados</button>
                                <button type="button" class="btn btn-success">Spam</button>
                                <button type="button" class="btn btn-success">Todos</button>
                                <button type="button" class="btn btn-success">Importantes</button>
                            </div>
                        </div>
                        <div class="col text-white">
                            <form method="POST" action="{{ route('emails.store') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="subject">{{ __('Asunto') }}</label>
                                        <input type="text" class="form-control" id="subject" name="subject" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="recipient">{{ __('Destinatario') }}</label>
                                        <input type="email" class="form-control" id="recipient" name="recipient" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="body">{{ __('Cuerpo del mensaje') }}</label>
                                        <textarea class="form-control" id="body" name="body" rows="5" required></textarea>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-success">{{ __('Enviar Email') }}</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            <div>
        </div>
    </div>
</x-app-layout>
