<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(4); // cambia el valor de 10 por la cantidad de registros que quieras mostrar por página

        // Enviar los usuarios a la vista
        return view('administrador', ['users' => $users]);
    }
}
