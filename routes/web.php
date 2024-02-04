<?php

use App\Http\Controllers\AlienController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/home', [AlienController::class, 'index']); // index est la method recherchee
Route::get('/', [AlienController::class, 'index']);


Route::get('/about', [AlienController::class, 'about']); // about est la method recherchee

Route::get('/services', [AlienController::class, 'services']); // 

Route::get('/contact', [AlienController::class, 'contact']); // 


// post request (retourner les donnees apres la soumission de formulaire contact)
Route::post('/contact', [AlienController::class, 'formContactSub']); // 