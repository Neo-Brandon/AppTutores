<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\MensajeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/tutor', function () {
    return view('tutor.index');
});

//Ruta para el menu "añadir" del administrador
Route::get('/tutor/mensajes', function () {
    return view('/tutor/mensajes');
});

Route::get('/tutor/mensaje-indiv', function () {
    return view('/tutor/mensaje-indiv');
});

Route::get('/tutor/incidencias', function () {
    return view('/tutor/incidencias');
});

Route::get('/tutor/msg-group', function () {
    return view('/tutor/msg-group');
});

Route::get('/tutor/msg-received', function () {
    return view('/tutor/msg-received');
});

// Rutas de administrador --------------------------------------------------------------------------------
Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/admin/menu', function () {
    return view('admin.menu2');
});

Route::get('/admin/agregarAdmin', function () {
    return view('admin.agregarAdmin');
});

Route::get('/admin/usuariosAdmin', function () {
    return view('admin.usuariosAdmin');
});

Route::get('/admin/registroAdmin', function () {
    return view('admin.registarAdministradorAdmin');
});

Route::get('/admin/registroAlumno', function () {
    return view('admin.registarAlumnosAdmin');
});

Route::get('/admin/aaaa', function () {
    return view('admin.aaaa');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rutas Usuarios -------------------------------------------------------------------------------------------

Route:: get('/usuarios', [UsuarioController::class, 'index'])-> name('usuario.index');
Route:: get('/usuarios/create', [UsuarioController::class, 'create'])->name('usuario.create');
Route:: get('/usuarios/{id}', [UsuarioController::class, 'show'])->name('usuario.show');
Route:: post('/usuarios', [UsuarioController::class, 'store'])->name('usuario.store');
Route:: delete('/usuarios/delete/{id}', [UsuarioController::class, 'destroy'])->name('usuario.destroy');
Route:: get('/usuarios/edit/{id}', [UsuarioController::class, 'edit'])-> name('usuario.edit');
Route:: put('/usuarios/update/{id}', [UsuarioController::class, 'update'])-> name('usuario.update');

//Rutas mensajes
Route:: get('/mensajes', [MensajeController::class, 'index'])-> name('mensaje.index');
Route:: get('/mensajes/create', [MensajeController::class, 'create'])->name('mensaje.create');
Route:: get('/mensajes/{id}', [MensajeController::class, 'show'])->name('mensaje.show');
Route:: post('/mensajes', [MensajeController::class, 'store'])->name('mensaje.store');
Route:: delete('/mensajes/delete/{id}', [MensajeController::class, 'destroy'])->name('mensaje.destroy');
Route:: get('/mensajes/edit/{id}', [MensajeController::class, 'edit'])-> name('mensaje.edit');
Route:: put('/mensajes/update/{id}', [MensajeController::class, 'update'])-> name('mensaje.update');


require __DIR__.'/auth.php';
