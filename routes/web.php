<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\Admin\ComicController;


Route::get('/', function () {
    return view('Home');
});

// Route::get(PERCORSO CON CUI ARRIVARE ALLA PAGINA, FUNZIONE DI CALLBACK CHE MI CREA LA RISPOSTA DA DARE ALL UTENTE)

// crud read
// Route::get('/', [ComicController::class, 'index'])->name('comics.index');
// Route::get('{id}', [ComicController::class, 'show'])->name('comics.show');


//definisce 7 rotte comando da terminale:php artisan route:list per vederle
Route::resource('comics',ComicController::class);

// crud create
// Route::get('/comics/create', [ComicController::class, 'create'])->name('pastas.create');
// Route::post('/comics/add', [ComicController::class, 'store'])->name('pastas.store');

// crud update
// Route::get('/comics/{id}/update', [PastaController::class, 'edit'])->name('pastas.edit');
// Route::put('/comics/{request}/{id}/update', [PastaController::class, 'update'])->name('pastas.update');

// crud delete
// Route::delete('/comics/{id}/delete', [PastaController::class, 'destroy'])->name('pastas.destroy');
