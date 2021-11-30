<?php

namespace App\Http\Livewire\Libros;

use App\Models\Libro;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateLibros extends Component {

    use WithFileUploads;
    public Libro $libro;
    public $foto;

    public function mount() {
        $this->libro = new Libro();
    }

    public function render() {
        return view('livewire.libros.create-libros');
    }

    public function crear() {
        $this->validate();
        if ($this->foto != null) {
            $this->libro->foto = Storage::disk("public")->put("images/libros", $this->foto);
        }
        $this->libro->save();
        return redirect(route("libros.index"));
    }

    protected function rules() {
        return RulesLibro::Reglas();
    }
}
