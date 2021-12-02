<?php

use App\Http\Livewire\Libros\CreateLibros;
use App\Http\Livewire\Libros\DeleteLibros;
use App\Http\Livewire\Libros\EditLibros;
use App\Http\Livewire\Libros\IndexLibros;
use App\Http\Livewire\Libros\MostrarLibros;
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

Route::get('/libros', IndexLibros::class)->name("libros.index");
Route::get('/libros/create', CreateLibros::class)->name("libros.create");
Route::get('/libros/{libro}/mostrar', MostrarLibros::class)->name("libros.mostrar");
Route::get('/libros/{libro}/edit', EditLibros::class)->name("libros.edit");
Route::get('/libros/{libro}/delete', DeleteLibros::class)->name("libros.delete");

