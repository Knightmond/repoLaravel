<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller {
    public function index() {
        // $cursos = Curso::where("categoria","Back End");
        // $cursos = Curso::where("id",1)->first();
        // $cursos = Curso::where("precio",">","500")->get();
        // $cursos = Curso::where("categoria","Back End")->where("subtitulos","Spanish")->get();
        // $cursos = Curso::where("precio","<","500")->select("curso","precio")->get();
        // $cursos = Curso::orderBy("precio","desc")->get();
        // $cursos = Curso::where("categoria","Back End")->count();

        //return($cursos);
    }
    public function create() {
        $curso1 = new Curso();
        $curso1->curso = "PHP";
        $curso1->precio = 269.12;
        $curso1->categoria = "Back End";
        $curso1->subtitulos = "English";
        $curso1->save();

        $curso2 = new Curso();
        $curso2->curso = "Java";
        $curso2->precio = 567.21;
        $curso2->categoria = "Full Stack";
        $curso2->subtitulos = "Spanish";
        $curso2->save();

        $curso3 = new Curso();
        $curso3->curso = "Python";
        $curso3->precio = 412.52;
        $curso3->categoria = "Data Science";
        $curso3->subtitulos = "German";
        $curso3->save();

        $curso4 = new Curso();
        $curso4->curso = "JavaScript";
        $curso4->precio = 309.24;
        $curso4->categoria = "Front End";
        $curso4->subtitulos = "Hindi";
        $curso4->save();

        $curso5 = new Curso();
        $curso5->curso = "C++";
        $curso5->precio = 788.87;
        $curso5->categoria = "Full Stack";
        $curso5->subtitulos = "Chinese";
        $curso5->save();

        $curso6 = new Curso();
        $curso6->curso = "LUA";
        $curso6->precio = 452.87;
        $curso6->categoria = "Back End";
        $curso6->subtitulos = "English";
        $curso6->save();

        $curso7 = new Curso();
        $curso7->curso = "CSS3";
        $curso7->precio = 246.87;
        $curso7->categoria = "Front End";
        $curso7->subtitulos = "German";
        $curso7->save();

        $curso8 = new Curso();
        $curso8->curso = "C";
        $curso8->precio = 512.51;
        $curso8->categoria = "Back End";
        $curso8->subtitulos = "Spanish";
        $curso8->save();

        $curso9 = new Curso();
        $curso9->curso = "JavaScript";
        $curso9->precio = 600.87;
        $curso9->categoria = "Back End";
        $curso9->subtitulos = "Chinese";
        $curso9->save();

        $curso10 = new Curso();
        $curso10->curso = "HTML";
        $curso10->precio = 293.12;
        $curso10->categoria = "Front End";
        $curso10->subtitulos = "Hindi";
        $curso10->save();
    }
}
