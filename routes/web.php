<?php

use App\Http\Controllers\SessionController;
use App\Http\Controllers\TimeController;
use Illuminate\Support\Facades\Route;

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

// ROUTE TIMES
Route::resource('/times', TimeController::class)->only([
    'index', 'show', 'create', 'store', 'edit', 'update', 'destroy'
]);
// ROUTE TIMES

Route::get('session', [SessionController::class, 'session']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
