<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('inicio');
})->name('inicio');



Route::get('listado', function () {
    
    return view('posts.listado');
})->name('posts_listado');



Route::get('ficha/{id}', function ($id=0) {
   return view('posts.ficha', compact('id'));
 
})->where('id', "[0-9]+")->name('posts_ficha');




