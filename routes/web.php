<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;

// Página Principal
Route::get('/', [HomeController::class, 'index'])->name('home');

// Nosotros
Route::get('/nosotros', [HomeController::class, 'nosotros'])->name('nosotros');

// Servicios
Route::get('/servicios', [ServicioController::class, 'index'])->name('servicios.index');
Route::get('/servicios/{id}', [ServicioController::class, 'show'])->name('servicios.show');

// Clientes
Route::get('/clientes', [HomeController::class, 'clientes'])->name('clientes');

// Seguimiento de Caso
Route::get('/seguimiento', [HomeController::class, 'seguimiento'])->name('seguimiento');

// Contacto
Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto.index');
Route::post('/contacto', [ContactoController::class, 'store'])->name('contacto.store');
