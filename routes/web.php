<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
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
    return view('accueil');
}); 



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/index', function () {
        return view('index');
    })->name('index'); 
});


Route::get('/index', [AdminController::class, 'index'])->name('admin.index');
 Route::get('/ajouter', [AdminController::class, 'ajout'])->name('admin.ajout');
Route::get('/liste', [AdminController::class, 'liste'])->name('admin.liste');
Route::get('/boissons vendues', [AdminController::class, 'listevente'])->name('admin.listevente');
Route::get('/utilisateur', [AdminController::class, 'utilisateur'])->name('admin.utilisateur');
Route::get('/reservation', [AdminController::class, 'reservation'])->name('admin.reservation');
Route::get('/listecate', [AdminController::class, 'listecate'])->name('admin.listecate');
Route::get('/categorie', [AdminController::class, 'categorie'])->name('admin.categorie'); 


require __DIR__.'/auth.php';