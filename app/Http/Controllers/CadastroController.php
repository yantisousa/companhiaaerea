<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cadastro;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CadastroController extends Controller
{
    public function index(){
        return view('login.create');
    }
    public function create(Request $request){
        $cadastro = $request->except('_token');
        $cadastro['password'] = Hash::make($cadastro['password']);
        $user = User::create($cadastro);
        Auth::login($user);
        return view('home.home');
    }
}
