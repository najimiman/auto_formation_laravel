<?php

use App\Http\Controllers\testcontroller;
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
    return view('form');
});

// Request form 
Route::any("Request",[testcontroller::class,"index"]);


Route::get('/personForm', function () {
    return view('index');
});

Route::any("Person/{id}",[testcontroller::class,"findId"]);



