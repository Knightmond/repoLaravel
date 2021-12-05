<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\Usuario;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditUsuarios extends Component {

    use WithFileUploads;
    public Usuario $usuario;
    public $confirmar_password;
    public $foto;

    public function render() {
        return view('livewire.usuarios.edit-usuarios');
    }

    public function editar() {
        $this->validate();
        if ($this->foto) {
            if($this->usuario->foto) {
                Storage::disk("public")->delete($this->usuario->foto);
            }
            $this->usuario->foto = Storage::disk("public")->put("images/usuarios", $this->foto);
        }
        //$this->usuario->save();
        //return redirect(route("usuarios.index"));
    }

    protected function rules() {
        return RulesUsuario::reglas($this->usuario->id);
    }
}
