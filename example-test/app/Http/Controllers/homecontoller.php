<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontoller extends Controller
{
    public function mytest(){
        return view('test');
    }
    public function layout(){
        return view('layout');
    }
    public function about(){
        return view('about');
    }
    public function contacte(){
        return view('contact');
    }
    public function home(){
        return view('layout');
    }
}
