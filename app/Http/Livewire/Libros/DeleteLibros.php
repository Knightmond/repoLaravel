<?php

namespace App\Http\Livewire\Libros;

use App\Models\Libro;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class DeleteLibros extends Component {
    use WithFileUploads;
    public Libro $libro;
    public $foto;
    public function render() {
        return view('livewire.libros.delete-libros');
    }

    public function delete() {
        if ($this->libro->foto != null) {
            Storage::disk("public")->delete($this->libro->foto);
        }
        $this->libro->delete();
        return redirect(route('libros.index'));
    }
}
