<?php

use App\Http\Controllers\Dashboardcontroller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\Tachecontroller;
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

// Route::get('/', function () {
//     return view('welcome');
// });


    Route::get('/dashboard', [Dashboardcontroller::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



// Route::resource('/',Tachecontroller::class);
Route::get('/',[TacheController::class,'index'])->name('/');
Route::post('store',[TacheController::class,'store'])->name('store');
Route::get('mytache/updateT/{id}',[TacheController::class,'edit'])->name('mytacheupdateT');
Route::put('mytache/up/{id}',[TacheController::class,'update'])->name('mytacheupdateTee');
Route::delete('destroy/{id}',[TacheController::class,'destroy'])->name('mytachedelete');
// Route::get('redirect','App\Http\Controllers\SocialController@redirect');
// Route::get('callback','App\Http\Controllers\SocialController@callback');

 Route::get('google-auth',[SocialController::class,'redirect'])->name('redirect');
Route::get('auth/google/callback',[SocialController::class,'callback']);

require __DIR__.'/auth.php';