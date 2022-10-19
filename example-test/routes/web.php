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
Route::get('/test1', function () {
    return "hello laravel";
});
Route::get('/test2',[homecontoller::class,'mytest']);

//routing requests
Route::get('/reques', function () {
    $var=request("store");
    if(isset($var)){
        return "hello <span style='color:red'>".$var."</span>";
    }
    return "hello <span style='color:red'> iman </span>";
});
//routing categories
Route::get('/page/{category?}/{item?}', function ($category=null,$item=null) {
    if(isset($category)){
        if(isset($item)){
            return '<h1>'.$item.'</h1>';
          //or:   return "<h1>{$item}</h1>";
        }
        return '<h1>'.$category.'</h1>';
    }
    return "page";
});

Route::get('/',[homecontoller::class,'home'])->name('home.index');
Route::get('/about',[homecontoller::class,'about'])->name('home.about');
Route::get('/contact/cc',[homecontoller::class,'contacte'])->name('home.contact');