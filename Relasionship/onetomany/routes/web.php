<?php

use App\Http\Controllers\DetailController;
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
//one to one
Route::get('/hasOne',[DetailController::class,'hasOne']);

//One to many
route::get('/hasMany',[DetailController::class,"hasMany"]);
