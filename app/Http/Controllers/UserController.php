<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class UserController extends Controller
{
    public function create(): View
    {
        return view('auth.register');
    }

      /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */

    public function processRegistration(Request $request)
    {
        // Validar los datos enviados por el formulario
        $request->validate([
            'identificador' => 'required|numeric',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/|confirmed',
            'nombre' => 'required|max:100',
            'cedula' => 'required|max:11',
            'fecha_nacimiento' => 'required|date|before:-18 years',
            'codigo_ciudad' => 'required|numeric',
        ]);

        // Crear un nuevo usuario con los datos enviados por el formulario
        $user = new User();
        $user->identificador = $request->input('identificador');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->nombre = $request->input('nombre');
        $user->numero_celular = $request->input('numero_celular');
        $user->cedula = $request->input('cedula');
        $user->fecha_nacimiento = $request->input('fecha_nacimiento');
        $user->codigo_ciudad = $request->input('codigo_ciudad');
        $user->save();

        event(new Registered($user));

        return redirect()->route('home')->with('success', 'Usuario registrado exitosamente.');
    }
}
