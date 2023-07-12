<?php
use App\Http\Controllers\CarController;
use App\Http\Controllers\UsrController;

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

Route::get('/', function () {
    return view('/system/sistema');
    //return view('welcome');

});

Route::resource('/Usuarios', UsrController::class);
Route::resource('/Vehiculos', CarController::class);


