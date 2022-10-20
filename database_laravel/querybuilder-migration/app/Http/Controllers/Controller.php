<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
//Database Get 
        $user = DB::table('promotion')->get();
 
        return view('index',compact('user'));
    }

    // Database where  
    public function FindId($id)
    {
        $user = DB::table('promotion')->where("id",$id)->get();
        
        return view('userId',compact('user'));
    }

     //Database select first row 
    public function FindName()
    {
        $user = DB::table('promotion')->first();
        return $user->name;
    }
//Database OrderBy
    public function orderBy()
    {   
        $user = DB::table('promotion')->orderBy("name")->get();
 
        return view('index',compact('user'));
    }
// Database select
    public function select()
    {
        $user = DB::table('promotion')
        ->select('name','id')
        ->get();
 
        return view('index',compact('user'));
    }
   
}
