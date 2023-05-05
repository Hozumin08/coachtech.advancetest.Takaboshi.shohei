<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\CheckController;

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

// Route::get('/', function () {return view('welcome');});

Route::get('form',[FormController::class, 'form'])->name('form.index');
Route::post('form.confirm', [FormController::class, 'confirm'])->name('form.confirm');
Route::post('form.store', [FormController::class, 'store'])->name('form.store');

// Route::get('check',[CheckController::class, 'check']) -> name();