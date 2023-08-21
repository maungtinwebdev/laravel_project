<?php

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
    return view('test');
})->name('test');
Route::get('/test1', function () {
    return view('test1');
})->name('test1');
Route::get('/test2', function () {
    return view('test2');
})->name('test2');
Route::get('/test3', function () {
    return view('test3');
})->name('test3')->middleware('auth');
Route::get('/test4', function () {
    return view('test4');
})->name('test4');




Route::post('/matchcreate',[App\Http\Controllers\Match1Controller::class, 'store'])->name('matchcreate');
Route::get('/matchcreate1',[App\Http\Controllers\Match1Controller::class, 'index'])->name('matchcreate1');
Route::get('/matchcreate',[App\Http\Controllers\Match1Controller::class, 'show'])->name('matchcreate');
Route::get('/matchcreateshow',[App\Http\Controllers\Match1Controller::class, 'show1'])->name('matchcreateshow');
Route::get('/matchedit',[App\Http\Controllers\Match1Controller::class, 'edit'])->name('matchedit');
Route::get('/matchdelete/{id}/destroy',[App\Http\Controllers\Match1Controller::class, 'destroy'])->name('matchdelete')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
