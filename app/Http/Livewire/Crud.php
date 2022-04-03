<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Usuario;

class Crud extends Component
{
    Public $usuarios;
    Public $forms;
    public function render()
    {
        $this->usuarios = Usuario::all();
        return view('livewire.crud');

        $this->forms = Form::all();
        return vie('livewire.form');
    }
}
