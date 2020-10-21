<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController; // importar el controlador




Route::resource('Libro', LibroController::class); // tienes que añadirle el ::class al controlador
