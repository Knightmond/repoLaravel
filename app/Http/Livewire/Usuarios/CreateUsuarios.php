<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\Usuario;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateUsuarios extends Component {

    use WithFileUploads;
    public Usuario $usuario;
    public $foto;

    public function render() {
        return view('livewire.usuarios.create-usuarios');
    }

    protected function rules() {
        return RulesUsuario::Reglas();
    }
}
