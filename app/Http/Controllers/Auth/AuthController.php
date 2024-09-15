<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class AuthController extends Controller
{
    public function login_index(){
        return view('auth.login');
    }

    public function index(){
        $value = session()->all();
        print_r($value);
    }
    public function store_session(){
        session(['name' => 'Ruby']);
        return redirect('/s');
    }
    public function delete_session(){
        session()->forget('name');

    }
    
}
