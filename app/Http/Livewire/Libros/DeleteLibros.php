<?php

namespace App\Http\Livewire\Libros;

use App\Models\Libro;
use Livewire\Component;

class DeleteLibros extends Component
{
    public Libro $libro;
    public function render()
    {
        return view('livewire.libros.delete-libros');
    }

    public function delete()
    {
        $this->libro->delete();
        return redirect(route('libros.index'));
    }
}
