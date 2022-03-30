<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        echo "Funcionou";
        return view("welcome");
    }

    public function exe01(){
        return view("exe01");
    }

    public function exemplo(){
        return view('exemplo');
    }

    public function resultado(Request $request){
        $valor = $request['valor'];
        return "O valor informado é: $valor";
    }
}
