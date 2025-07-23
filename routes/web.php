<?php

use App\Http\Controllers\EquipoController;
use App\Http\Controllers\JugadorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');})->name('index');


Route::get('/equipo', [EquipoController::class, 'index'])->name('equipo.index');
Route::get('/equipo/create', [EquipoController::class, 'create'])->name('equipo.create');
Route::post('/equipo/store', [EquipoController::class, 'store'])->name('equipo.store');
Route::post('/equipo/destroy/{id}', [EquipoController::class, 'destroy'])->name('equipo.destroy');
Route::get('/equipo/edit/{id}', [EquipoController::class, 'edit'])->name('equipo.edit');
Route::post('/equipo/update/{id}', [EquipoController::class, 'update'])->name('equipo.update');



//rutas jugadores
Route::get('/jugador', [JugadorController::class, 'index'])->name('jugador.index');
Route::get('/jugador/crear', [JugadorController::class, 'create'])->name('jugador.create');
Route::post('/jugador/guardar', [JugadorController::class, 'store'])->name('jugador.store');
Route::get('/jugador/eliminar/{id}', [JugadorController::class, 'destroy'])->name('jugador.destroy');
Route::get('/jugador/editar/{id}', [JugadorController::class, 'edit'])->name('jugador.edit');
Route::post('/jugador/actualizar/{id}', [JugadorController::class, 'update'])->name('jugador.update');

