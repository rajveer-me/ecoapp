<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    
    public function register_user(Request $req){
        //validate the fields of form
        $data = $req->validate([
            'regName' => 'required',
            'regMail' => 'required|email',
            'regPass' => 'required|confirmed',
        ]);

        //create a new user
        $user = User::Create([
            'name' => $data['regName'],
            'email' => $data['regMail'],
            'password' => Hash::make($data['regPass']),
        ]);

        if($user){
            return redirect()->route('login-page')->with('success', 'Registration successful!');;
        }

    }


    public function login_user(Request $req){
        $credentials = $req->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)){
            return redirect()->route('dashboard-page')->with('Logged in successfully');
        }
    }

    public function dashboardPage(){
        // authentication check by middleware
        return view('pages/dashboard');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('welcome');
    }
}
