<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EtablissementController;
use App\Http\Controllers\FormateurController;
use App\Http\Controllers\MetierController;
use App\Http\Controllers\PermutationController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\VilleController;
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

Route::get('/counter', function () {
    return view('welcome');
});
Route::resource('/regions',RegionController::class)->middleware('auth');
Route::resource('/etablissements',EtablissementController::class)->middleware('auth');
Route::resource('/formateurs',FormateurController::class);
Route::resource('/metiers',MetierController::class)->middleware('auth');
Route::resource('/permutations',PermutationController::class); // got to controller for this route
Route::resource('/villes',VilleController::class); // got to controller for this route

Route::get('/login.show',[AuthController::class, 'show'])->name('login.show')->middleware('guest');
Route::post('/login',[AuthController::class, 'login'])->name('login')->middleware('guest');
Route::get('/logout',[AuthController::class, 'logout'])->name('logout')->middleware('auth');
//
