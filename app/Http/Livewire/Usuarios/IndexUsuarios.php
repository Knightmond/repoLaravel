<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\Usuario;
use Livewire\Component;
use Livewire\WithPagination;

class IndexUsuarios extends Component {

    protected $paginationTheme = "bootstrap";
    use WithPagination;
    public $search;
    public $cargado = false;

    public function render() {
        $usuarios = ($this->cargado == true) ? Usuario::where("nombre_usuario", "LIKE", "%".$this->search."%")
            ->orwhere("email", "LIKE", "%".$this->search."%")
            ->paginate(7) : [];
        return view('livewire.usuarios.index-usuarios', compact("usuarios"));
    }

    public function updatingSearch() {
        $this->resetPage();
    }

    public function cargando() {
        $this->cargado = true;
    }
}
