<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Exception;

class SocialController extends Controller
{
    function redirect(){
        return Socialite::driver('google')->redirect();
    }
    public function callback(){
        try {
            $user= Socialite::driver('google')->user();
           $exist_user = User::where('google_id',$user->getId())->first();
           if (! $exist_user) {
             $newUser=User::Create([
                  "name" =>$user->getName(),
                  "email"=>$user->getEmail(),
                  "google_id"=>$user->getId(),
                 
             ]);
             Auth::login($newUser);
             return redirect('/dashboard');
    
           }
           else{
             Auth::login($exist_user);
             return redirect('/dashboard');
           }
        } catch (Exception $th) {
         //throw $th;
         dd($th->getMessage());
        }
    }
}
