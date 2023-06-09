<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CastController;


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

Route::get('/table', function () {
    return view('table');
});

Route::get('/data-tables', function () {
    return view('data-tables');
});

Route::get('/cast', [CastController::class, 'index'])->name('cast-index');
Route::get('/cast/create', [CastController::class, 'create'])->name('cast-create');
Route::post('/cast', [CastController::class, 'store'])->name('cast-store');
Route::get('/cast/{cast_id}', [CastController::class, 'show'])->name('cast-show');
Route::get('/cast/{cast_id}/edit', [CastController::class, 'edit'])->name('cast-edit');
Route::post('/cast/{cast_id}/update', [CastController::class, 'update'])->name('cast-update');
Route::get('/cast/{cast_id}/delete', [CastController::class, 'destroy'])->name('cast-destroy');



