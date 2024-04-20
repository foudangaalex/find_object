<?php


use App\Http\Controllers\ThingController;
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

Route::get('/accueil', [ThingController::class, 'index'])->name('accueil');

Route::get('/objects', [ThingController::class,'create'])->name('objects');

