<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function create() {
        $alumno = new Alumno();
        $alumno->expediente = "1234567890";
        $alumno->nombre_alumno = "Edmond";
        $alumno->carrera = "IS";
        $alumno->edad = 21;
        $alumno->save();
    }
}
