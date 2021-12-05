<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateUsuarios extends Component {

    use WithFileUploads;
    public Usuario $usuario;
    public $foto;
    public $password;
    public $confirmar_password;

    public function mount() {
        $this->usuario = new Usuario();
    }

    public function render() {
        return view('livewire.usuarios.create-usuarios');
    }

    public function crear() {
        $this->validate();
        $this->usuario->password = Hash::make($this->password);
        if ($this->foto != null) {
            $this->usuario->foto = Storage::disk("public")->put("images/usuarios", $this->foto);
        }
        $this->usuario->save();
        return redirect(route("usuarios.index"));
    }

    protected function rules() {
        return RulesUsuario::reglas();
    }
}
