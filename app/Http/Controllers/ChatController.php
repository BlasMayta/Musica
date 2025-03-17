<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    // Mostrar el chat
    public function index()
    {
        $mensajes = Mensaje::orderBy('created_at', 'asc')->get();
        $tema = "¿Es la inteligencia artificial una amenaza para la humanidad?";
        return view('debate.chat', compact('mensajes', 'tema'));
    }

    // Enviar un mensaje
    public function enviarMensaje(Request $request)
    {
        $request->validate([
            'mensaje' => 'required|string|max:255',
        ]);

        // Obtener el nombre del usuario autenticado
        $usuario = auth()->user()->name;

        Mensaje::create([
            'usuario' => $usuario,
            'mensaje' => $request->mensaje,
        ]);

        return redirect()->route('debate.chat');
    }

    // Limpiar el chat
    public function limpiarChat()
    {
        Mensaje::truncate(); // Elimina todos los mensajes
        return redirect()->route('debate.chat');
    }
}