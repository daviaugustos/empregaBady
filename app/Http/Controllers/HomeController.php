<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function indexView (){
        return view('index');
    }

    public function vagasView () {
        return view('home.vagas');
    }

    public function cadastroCandidatoView () {
        return view('home.cadastroCandidato');
    }

    public function cadastroEmpresaView () {
        return view('home.cadastroEmpresa');
    }

    public function empresaLoginView () {
        return view('home.empresaLogin');
    }

    public function candidatoLoginView () {
        return view('home.candidatoLogin');
    }

    public function salvarEmpresa() {
        $this->validate(request(), [
            'txtEmail' => 'email',
            'password' => 'required|confirmed|min:6',
            'txtNome' => 'max:100'
        ]);
    }
}
