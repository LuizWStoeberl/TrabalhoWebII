<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\controllerProject;
use App\Http\Controllers\contato;

Route::get('/', [controllerProject::class, 'home'])->name('home');
Route::get('/admin',[controllerProject::class, 'admin'])->name('admin');
Route::get('/pagicontatos', [controllerProject::class, 'contact']);
//Route::get('/pagicontatos', [controllerProject::class, 'contact']);
Route::post('/pagicontatos', [contato::class, 'store'])->name('contato.store');