<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testcontroller extends Controller
{
    
    //exemple 2
    function findId(Request $request,$id){

        if($id < 1){
        $name = $request->input("name");
        return "Hello $name";
    }
}
}
