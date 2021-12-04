<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\Usuario;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateUsuarios extends Component {

    use WithFileUploads;
    public Usuario $usuario;
    public $foto;
    public $verPassword;

    public function mount() {
        $this->usuario = new Usuario();
    }

    public function render() {
        return view('livewire.usuarios.create-usuarios');
    }

    public function crear() {
        $this->validate();
        if ($this->foto != null) {
            $this->libro->foto = Storage::disk("public")->put("images/libros", $this->foto);
            //Storage::disk("public")->put("images/usuarios", $this->foto);
        }
        $this->usuario->save();
        return redirect(route("usuarios.index"));
    }

    protected function rules() {
        return RulesUsuario::reglas();
    }
}
