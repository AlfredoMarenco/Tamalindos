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


Route::get('/mascota', [MascotaController::class , 'index'])->name('mascotas.index');
Route::get('/mascota/profile/{id}', [MascotaController::class, 'show'])->name('mascota.show');
Route::get('/mascota/create', [MascotaController::class, 'create'])->name('mascota.create');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
