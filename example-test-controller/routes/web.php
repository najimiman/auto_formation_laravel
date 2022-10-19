<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontoller;
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


Route::get('/',[homecontoller::class,'home'])->name('home.index');
Route::get('/about',[homecontoller::class,'about'])->name('home.about');
Route::get('/contact/cc',[homecontoller::class,'contacte'])->name('home.contact');

Route::get('/mm',[homecontoller::class,'tt']);