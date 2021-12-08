<?php

use App\Http\Livewire\Libros\CreateLibros;
use App\Http\Livewire\Libros\DeleteLibros;
use App\Http\Livewire\Libros\EditLibros;
use App\Http\Livewire\Libros\IndexLibros;
use App\Http\Livewire\Libros\MostrarLibros;
use App\Http\Livewire\Login\Login;
use App\Http\Livewire\Login\Logout;
use App\Http\Livewire\Usuarios\CreateUsuarios;
use App\Http\Livewire\Usuarios\DeleteUsuarios;
use App\Http\Livewire\Usuarios\EditUsuarios;
use App\Http\Livewire\Usuarios\IndexUsuarios;
use App\Http\Livewire\Usuarios\MostrarUsuarios;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//login
Route::get('/login', Login::class)->name("login");

Route::group(["middleware" => "auth"], function(){
    //libros
    Route::get('/libros', IndexLibros::class)->name("libros.index");
    Route::get('/libros/create', CreateLibros::class)->name("libros.create");
    Route::get('/libros/{libro}/mostrar', MostrarLibros::class)->name("libros.mostrar");
    Route::get('/libros/{libro}/edit', EditLibros::class)->name("libros.edit");
    Route::get('/libros/{libro}/delete', DeleteLibros::class)->name("libros.delete");

    //usuarios
    Route::get('/usuarios', IndexUsuarios::class)->name("usuarios.index");
    Route::get('/usuarios/create', CreateUsuarios::class)->name("usuarios.create");
    Route::get('/usuarios/{usuario}/mostrar', MostrarUsuarios::class)->name("usuarios.mostrar");
    Route::get('/usuarios/{usuario}/edit', EditUsuarios::class)->name("usuarios.edit");
    Route::get('/usuarios/{usuario}/delete', DeleteUsuarios::class)->name("usuarios.delete");
});
