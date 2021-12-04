<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\Usuario;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class DeleteUsuarios extends Component {
    use WithFileUploads;
    public Usuario $usuario;
    public $foto;

    public function render() {
        return view('livewire.usuarios.delete-usuarios');
    }

    public function delete() {
        if ($this->usuario->foto != null) {
            Storage::disk("public")->delete("images/usuarios", $this->foto);
        }
        $this->usuario->delete();
        return redirect(route("usuarios.index"));
    }
}
