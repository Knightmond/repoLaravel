<?php

namespace App\Http\Livewire\Libros;

use App\Models\Libro;
use Livewire\Component;
use Livewire\WithPagination;

class IndexLibros extends Component {

    protected $paginationTheme = "bootstrap";
    use WithPagination;
    public $search;
    public $cargado = false;

    public function render()
    {
        $libros = ($this->cargado == true) ? Libro::where("titulo", "LIKE", "%".$this->search."%")
            ->orwhere("editorial", "LIKE", "%".$this->search."%")
            ->orwhere("autor", "LIKE", "%".$this->search."%")
            ->paginate(7) : [];
        return view('livewire.libros.index-libros', compact("libros"));
    }

    public function updatingSearch() {
        $this->resetPage();
    }

    public function cargando() {
        $this->cargado = true;
    }
}
