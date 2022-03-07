<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengenalanController;
use App\Http\Controllers\Variable2Controller;
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
    return view('home');
});
Route::get('latihanphp', [PengenalanController::class,'index'])->name('latihanphp');
Route::get('latihanphp2', [Variable2Controller::class,'index'])->name('latihanphp2');