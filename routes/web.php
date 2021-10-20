<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\UsersController;
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
Route::get('/alumnos/create', [AlumnoController::class, "create"]);
Route::get('/empresas/create', [EmpresaController::class, "create"]);
Route::get('/users', [UsersController::class, "index"]);
Route::get('/users/create', [UsersController::class, "create"]);
