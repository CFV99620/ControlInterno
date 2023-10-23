<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function test()
    {
        return 'Hola';
    }
    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->Nombre = $request->input('Nombre');
        $cliente->Telefono = $request->input('Telefono');

        $cliente->save();

    }
}
