<?php

use App\Http\Controllers\ArtikelController as ControllersArtikelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ContactUsController;


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

Route::get('/home0184', [HomeController::class, 'index']); 
Route::get('/artikel0184', [ArtikelController::class, 'index']);
Route::get('/contactus0184', [ContactUsController::class, 'index']);