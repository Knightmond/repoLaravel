<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller {
    public function create() {
        $nombres = ["Eiei","Cafecitpo","Garam Masala","Marna","Krostonov"];
        $rfcs = ["YEMJ210926DA4","CIRJ210911NV8","PIAM170106I110","LEOI120115FL6","VACA16092023A"];
        $direcciones = ["Enrique Segoviano","Siu calle #41","412 North Carolina", "No lo se", "Blvd. Chimalhuacan #12"];
        $numeros = ["6273287562","2847285909","8463760285","1094820032","4789352849"];
        $postales = [83450,24413,48275,52231,95812];

        for ($i=0; $i < 5; $i++) {
            $empresa = new Empresa();
            $empresa->nombre_empresa = $nombres[$i];
            $empresa->rfc = $rfcs[$i];
            $empresa->direccion = $direcciones[$i];
            $empresa->numero = $numeros[$i];
            $empresa->codigo_postal = $postales[$i];
            $empresa->save();
        }
    }
}
