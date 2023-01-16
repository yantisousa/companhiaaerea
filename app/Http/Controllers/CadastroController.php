<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cadastro;

class CadastroController extends Controller
{
    public function index(){
        return view('login.create');
    }
    public function create(Request $request){
        $cadastro = Cadastro::create($request->all());
        return to_route('login.index');
    }
}
