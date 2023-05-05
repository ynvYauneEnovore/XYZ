<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Nuevo Correo:') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-dark">

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

                        <button type="submit" class="btn btn-primary">{{ __('Enviar Email') }}</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
