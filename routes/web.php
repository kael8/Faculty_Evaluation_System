<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SystemAdminController;

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


Route::get('/student', [StudentController::class, 'index'])->name('User_Interface.student.index');
    Route::get('/student/evaluate/', [StudentController::class, 'evaluate'])->name('User_Interface.student.evaluate');


Route::get('/systemAd', [SystemAdminController::class, 'index'])->name('User_Interface.systemAd.index');
    Route::get('/systemAd/addUser', [SystemAdminController::class, 'addUser'])->name('User_Interface.systemAd.addUser');
    Route::get('/systemAd/updateUser', [SystemAdminController::class, 'updateUser'])->name('User_Interface.systemAd.updateUser');
    Route::get('/systemAd/removeUser', [SystemAdminController::class, 'removeUser'])->name('User_Interface.systemAd.removeUser');
    Route::get('/systemAd/pendingRes', [SystemAdminController::class, 'pendingRes'])->name('User_Interface.systemAd.pendingRes');
    Route::get('/systemAd/validatedRes', [SystemAdminController::class, 'validatedRes'])->name('User_Interface.systemAd.validatedRes');