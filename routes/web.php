<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('frontend.index');
});

Route::get('tariffn',[\App\Http\Controllers\DocumentFrontController::class,'index']);

Auth::routes();
Route::get('download/{id}',[\App\Http\Controllers\DocumentFrontController::class,'download']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
