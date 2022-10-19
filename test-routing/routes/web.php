<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
Route::get('/test2', function () {
    return view('test');
});
// Example - Methods.
Route::match(['get', 'post'], '/method', function () {
    return '<p>Testing Methods.</p>';
});

// Redirect.
Route::redirect('/redirect', '/test1');
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

//protection CSRF
Route::get('/csrfp',function(){
    return view('csrf');
});

Route::any('/csrf1',function(request $request){
     $nom=$request->input("name");
     return "hello  ".$nom;
    
 });
