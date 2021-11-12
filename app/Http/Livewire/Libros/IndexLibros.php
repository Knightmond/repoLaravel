<?php

namespace App\Http\Livewire\Libros;

use App\Models\Libro;
use Livewire\Component;

class IndexLibros extends Component
{
    protected $paginationTheme = "bootstrap";
    public function render()
    {
        $libros = Libro::paginate(10);
        return view('livewire.libros.index-libros', compact("libros"));
    }
}
