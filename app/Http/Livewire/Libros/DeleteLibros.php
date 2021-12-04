<?php

namespace App\Http\Livewire\Libros;

use App\Models\Libro;
use Livewire\Component;
use Livewire\WithFileUploads;

class DeleteLibros extends Component
{
    use WithFileUploads;
    public Libro $libro;
    public $foto;
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
