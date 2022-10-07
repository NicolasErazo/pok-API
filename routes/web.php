<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pokemon;

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
    return view('auth.login');
});
   
Auth::routes(['reset'=>false]);

Route::get('/home', [Pokemon::class, 'listar'])->middleware('auth'); 
Route::post('/home', [Pokemon::class, 'listar'])->middleware('auth'); 

Route::post('/home/pokemon', [Pokemon::class, 'buscar'])->middleware('auth');

Route::post('/home/details', [Pokemon::class, 'detallar'])->middleware('auth'); 