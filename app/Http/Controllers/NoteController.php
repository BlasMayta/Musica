<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    // Mostrar vista
    public function index()
    {
        return view('note.index');
    }

    // Guardar nota
    public function store(Request $request)
    {
        $request->validate([
            'note' => 'required|string|max:5',
            'accuracy' => 'required|numeric|between:-50,50'
        ]);

        Note::create($request->all());

        return response()->json(['success' => true]);
    }

    // Opcional: Mostrar registros
    public function show()
    {
        $notes = Note::latest()->get();
        return view('note.history', compact('notes'));
    }
       
}
