<?php

namespace App\Http\Livewire\Libros;

use App\Models\Libro;
use Livewire\Component;

class EditLibros extends Component
{
    public Libro $libro;
    public function render()
    {
        return view('livewire.libros.edit-libros');
    }
    public function editar()
    {
        $this->validate();
        $this->libro->save();
        return redirect(route('libros.index'));
    }
    protected function rules()
    {
        return RulesLibro::Reglas();
    }
}
