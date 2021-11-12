<?php

namespace App\Http\Livewire\Cursos;

use App\Models\Curso;
use Livewire\Component;

class CursosIndex extends Component {

    public function render() {
        $cursos = Curso::paginate(5);
        return view('livewire.cursos.cursos-index');
    }

}
