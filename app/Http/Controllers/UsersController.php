<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller {
    public function index() {
        $nombre = "Edmond";
        $edad = 21;
        return view("usuarios.index",compact("nombre","edad"));
    }
    public function create() {
        return view ("usuarios.create");
    }
}
