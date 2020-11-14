<?php

use App\Http\Controllers\MascotaController;
use App\Models\Mascota;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mascota', [MascotaController::class , 'index'])->name('mascota.index');
Route::get('/mascota/show/{id}', [MascotaController::class, 'show'])->name('mascota.show');
Route::get('/mascota/edit/{id}', [MascotaController::class, 'edit'])->name('mascota.edit');
Route::get('/mascota/create', [MascotaController::class, 'create'])->name('mascota.create');
Route::post('/mascota/store', [MascotaController::class, 'store'])->name('mascota.store');
Route::any('/mascota/update/{id}', [MascotaController::class, 'update'])->name('mascota.update');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
