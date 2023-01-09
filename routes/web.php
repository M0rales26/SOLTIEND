<?php

use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\TblCatalogoController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\TiendaController;
use App\Http\Controllers\ProductoController;

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

//-----------------------------------------------------------//
Route::get('/', function(){return view('home.home');})
    ->middleware('auth')
    ->name('home.index');
//-----------------------------------------------------------//
Route::get('/login',[SessionsController::class, 'create'])
    ->middleware('guest')
    ->name('login.index');
Route::post('/login',[SessionsController::class, 'store'])
    ->name('login.store');
//-----------------------------------------------------------//
Route::get('/register',[RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register.index');
Route::post('/register',[RegisterController::class, 'store'])
    ->name('register.store');
Route::get('/editar/{id}',[RegisterController::class, 'edit'])
    ->name('register.edit');
Route::put('/editar/{id}',[RegisterController::class, 'update'])
    ->name('register.update');
// Route::delete('/eliminar/{id}',[RegisterController::class, 'destroy'])
//     ->name('register.destroy');
//-----------------------------------------------------------//
Route::resource('catalogo', TblCatalogoController::class);
//-----------------------------------------------------------//
Route::get('/contacto', [ContactoController::class, 'index'])
    ->name('contacto.index');
//-----------------------------------------------------------//
Route::get('/productos', [CartController::class, 'shop'])
    ->name('shop');
Route::get('/carrito', [CartController::class, 'cart'])
    ->name('cart.index');
Route::post('/add', [CartController::class, 'store'])
    ->name('cart.store');
Route::post('/update', [CartController::class, 'update'])
    ->name('cart.update');
Route::post('/remove', [CartController::class, 'remove'])
    ->name('cart.remove');
Route::post('/clear', [CartController::class, 'clear'])
    ->name('cart.clear');
//-----------------------------------------------------------//
Route::get('tiendas', [TiendaController::class, 'index'])
    ->name('tiendas.index');
Route::get('tienda/{id}', [ProductoController::class, 'index'])
    ->name('tienda.index');
//-----------------------------------------------------------//
Route::get('/logout',[SessionsController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');
//----------------------------------------------------------//