<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function index()
{
    return view('formulario.index');
}

public function store(Request $request)
{
    $data = $request->all();
    // Aquí puedes procesar los datos como desees
    return back()->with('success', 'Formulario enviado con éxito!');
}

    //
}
