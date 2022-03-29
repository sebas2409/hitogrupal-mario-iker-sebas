<?php

use App\Http\Controllers\PublicationController;
use App\Http\Controllers\UsuarioController;
use App\Mail\SendingMail;
use Illuminate\Support\Facades\Route;

Route::view('/','welcome')->name('view.welcome');
Route::view('/login','login')->name('view.login');
Route::view('/blog','blog')->name('view.blog');
Route::view('/crear','crearpubli')->name('view.crear');
Route::view('/validacion','validacion')->name('view.validacion');

Route::post('/principal', [UsuarioController::class,'store'])->name('usuario.store');
Route::get('/comprobar', [UsuarioController::class,'comprobar'])->name('usuario.comprobar');
Route::get('/principal', [UsuarioController::class,'usuario'])->name('usuario.usuario');
Route::get('/email',[UsuarioController::class,'codigo'])->name('usuario.codigo');

Route::post('/crearpublicacion', [PublicationController::class,'storePublication'])->name('publication.publication-store');
Route::get('/blog', [PublicationController::class,'show'])->name('publication.show');
Route::get("/editar/{id}", [PublicationController::class,'editar'])->name('publication.editar');
Route::post('/actualizar/{id}', [PublicationController::class,'update'])->name('publication.update');
Route::delete('/eliminar/{id}', [PublicationController::class,'delete'])->name('publication.delete');
Route::get('/individual/{id}', [PublicationController::class,'individual'])->name('publication.individual');


