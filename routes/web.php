<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaculEval;

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


Route::get('', [FaculEval::class, 'index'])->name('index');
Route::get('/index', function () {
    return view('User_Interface.index');
})->name('User_Interface.index');

Route::get('/evaluate', function () {
    return view('User_Interface.evaluate');
})->name('User_Interface.evaluate');
