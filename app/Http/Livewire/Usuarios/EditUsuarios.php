<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\Usuario;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditUsuarios extends Component {

    use WithFileUploads;
    public Usuario $usuario;
    public $verPassword;
    public $foto;

    public function render() {
        return view('livewire.usuarios.edit-usuarios');
    }

    public function editar() {
        $this->validate();
        if ($this->foto != null) {
            if($this->usuario->foto != null) {
                Storage::disk("public")->delete("images/usuarios/", $this->foto);
            }
            $this->usuario->foto = Storage::disk("public")->put("images/usuarios", $this->foto);
        }
        $this->usuario->save();
        return redirect(route("usuarios.index"));
    }

    protected function rules() {
        return RulesUsuario::reglas();
    }
}
