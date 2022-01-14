<?php

use App\Models\Recept;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\inlogController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\auth\registreerController;
use App\Http\Controllers\auth\GebruikersprofielController;
use App\Models\ReceptCategorie;

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

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/registreer', [registreerController::class, 'index'])->name('registreer');
Route::post('/registreer', [registreerController::class, 'store']);

Route::get('/inloggen', [inlogController::class, 'index'])->name('login');
Route::post('/inloggen', [inlogController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/gebruikersprofiel', [GebruikersprofielController::class, 'index'])->name('gebruikersprofiel');
Route::post('/gebruikersprofiel', [GebruikersprofielController::class, 'store']);