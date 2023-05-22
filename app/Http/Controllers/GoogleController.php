<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function LoginUsingGoogle()
    {
       return Socialite::driver('google')->redirect();
    }

    public function callbackFromGoogle()
    {
  
       try {
          $user = Socialite::driver('google')->user();
   
          
          session(['user' => $user]);
          //    Auth::loginUsingId($user);
              return redirect('/home');
   
          $saveUser = User::updateOrCreate([
              'facebook_id' => $user->getId(),
          ],[
              'name' => $user->getName(),
              'email' => $user->getEmail(),
              'password' => Hash::make($user->getName().'@'.$user->getId())
               ]);
   
          Auth::loginUsingId($saveUser->id);
   
          return redirect()->route('home');
          } catch (\Throwable $th) {
             throw $th;
          }
      }
   
}
