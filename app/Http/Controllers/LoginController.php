<?php

namespace App\Http\Controllers;

use App\Models\Cadastro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class LoginController extends Controller
{
    public function index(){
        return view('login.login');
    }
    public function authentication(Request $request)
    {
        
        if(!Auth::attempt($request->only('email', 'password'))){
            redirect()->back();
        }
        return view('home.home');
    }
    public function destroy(){
        Auth::logout();
        return to_route('home.index');
    }
}
