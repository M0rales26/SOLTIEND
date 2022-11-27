<?php

use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\TblCatalogoController;
use App\Http\Controllers\CarritoController;


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

Route::get('/', function(){return view('home.home');})
    ->middleware('auth')
    ->name('home.index');

Route::get('/login',[SessionsController::class, 'create'])
    ->middleware('guest')
    ->name('login.index');

Route::post('/login',[SessionsController::class, 'store'])
    ->name('login.store');

Route::get('/register',[RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register.index');

Route::post('/register',[RegisterController::class, 'store'])
    ->name('register.store');

Route::resource('catalogo', TblCatalogoController::class);

Route::get('/contacto', [ContactoController::class, 'index'])
    ->name('contacto.index');

Route::get('/catalogoc', [CarritoController::class, 'index'])
    ->name('catacarrito.index');

//-----------------------------------------------------------//
Route::get('/logout',[SessionsController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');
//----------------------------------------------------------//