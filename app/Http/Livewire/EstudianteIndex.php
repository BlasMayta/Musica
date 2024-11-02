<?php

namespace App\Http\Livewire;

use App\Models\Estudiante;
use Livewire\Component;

class EstudianteIndex extends Component
{
    public $estudiante;

    public function mount(){
        $this->estudiante=Estudiante::all();
    }
    public function render()
    {
        return view('livewire.estudiante-index');
    }
}
