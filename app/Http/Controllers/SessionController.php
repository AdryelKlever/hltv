<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function session() {
        echo "<h1> Teste de Sessão </h1>";

        session(['name' => 'Adryel Klever']);
        echo session('name');

        session() -> put('idade', '25');
        echo session() ->  get ('idade');

        Session::put('email', null);
        echo Session::get('email');

        Session::put(['carro1' => 'Opala', 'carro2' => 'Maverik']);

        Session::forget(['carro1', 'carro2']);

        if(Session::has('email')){
            echo "<p> Este email é válido!</p>";
        } else {
            echo "<p> Este email não é válido!</p>";
        }

        if(Session::exists('email')){
            echo "<p> Este email é válido!</p>";
        } else {
            echo "<p> Este email não é válido!</p>";
        }

        //Session::flash('message', 'Sesssão criada com sucesso!');
        echo Session::get('message');

        var_dump(Session::all(), session() -> all());
    }
}
