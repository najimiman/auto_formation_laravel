<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontoller extends Controller
{
   
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

    public function tt(){
        $nom="iman";
        $age="19";
        return view('input',compact('nom','age'));
    }
}
