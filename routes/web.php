<?php

use App\Http\Controllers\Solicitudes;
use Illuminate\Support\Facades\Route;


Route::get('/', [Solicitudes::class, 'mostrarVista']);
Route::post('/guardar', [Solicitudes::class, 'guardar']);
