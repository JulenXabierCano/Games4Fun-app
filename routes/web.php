<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalasController;
use App\models\SalaDamas;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/404', function () {
    return view('404');
});

Route::get('/datosSala', [SalasController::class, 'datosSala']);

Route::get('/sala', [SalasController::class, 'crearSala']);

Route::get('/damas', function () {
    return view('damas');
});

Route::get('/hf', function () {
    return view('404');
});

Route::get('/tr', function () {
    return view('404');
});

Route::get('/qnq', function () {
    return view('404');
});