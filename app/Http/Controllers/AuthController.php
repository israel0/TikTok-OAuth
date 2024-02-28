<?php

namespace App\Http\Controllers;

use Exception;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    // Display Login Page
    public function loginPage() {
          return view("welcome");
    }

    public function generateOTP($length) {
        $digits = '0123456789';
        return substr(str_shuffle($digits), 0, $length);
    }

    public function redirectTikTokPage() {
        return Socialite::driver('tiktok')->redirect();
     }

     public function handleTikTokCallback()
     {
         try {
             $user = Socialite::driver('tiktok')->user();
             if (!$user) {
                 throw new Exception('Failed to retrieve tiktok user.');
             }
             $data['name'] = $user->name;
             $data['otpCreatedAt'] = time();
             $data['otp'] = $this->generateOTP(6);
             return view('home', $data)->with('success', 'Authentication successful.');
         } catch (Exception $e) {
             return redirect()->route('login')->with('error', 'Authentication error: ' . $e->getMessage());
         }
     }


}
