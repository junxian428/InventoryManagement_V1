<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
    
        // Assuming you have a 'users' table with 'username' and 'password' columns
        $user = User::where('username', $username)->first();
        if ($user) {
            // User with the specified username was found
            // You can now proceed with further actions
            //return 'User found';

            return redirect()->route('clientdashboard');

        } else {
            // User with the specified username was not found
            //return redirect()->route('login')->with('alert', 'User not found');
            return redirect('/loginportal')->with('alert', 'Invalid Username or Password');

            //return 'User not found';
        }
      }

}
