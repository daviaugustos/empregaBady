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
            'txtEmail' => 'required|email',
            'password' => 'required|confirmed|min:6',
            'txtNome' => 'required|max:100',
            'txtCpf' => 'required|min:11',
            'sltSexo' => 'required',
            'txtDataNascimento' => 'required|max:10',
            'txtRg' => 'required',
            'txtDataExpedicao' => 'required|max:10',
            'txtTelefone' => 'required|max:20',
            'txtCelular' => 'max:20',
            'txtNomePai' => 'max:100',
            'txtNomeMae' => 'max:100',
            'sltEstadoCivil' => 'required',
            'txtQuantidadeFilhos' => 'integer',
            'txtEnderecoCep' => 'required|max:12',
            'sltEnderecoEstado' => 'required',
            'sltEnderecoCidade' => 'required|max:50',
            'txtEnderecoLogradouro' => 'required',
            'txtEnderecoBairro' => 'required',
            'txtEnderecoNumero' => 'required|max:6',
            'txtEnderecoComplemento' => 'nullable',
            'sltEscolaridade' => 'required',
            'txtCnhCategorias' => 'required|max:8',
            'txtCursos' => 'nullable',
            'txtCargoPretendido1' => 'required|min:5',
            'txtCargoPretendido2' => 'required|min:5',
            'txtCargoPretendido3' => 'nullable',
            'txtNomeEmpresa1' => 'nullable',
            'txtDataAdmissao1' => 'nullable|max:10',
            'txtDataSaida1' => 'nullable|max:10',
            'txtCargo1' => 'nullable',
            'txtAtividadesRealizadas1' => 'nullable',
            'txtNomeEmpresa2' => 'nullable',
            'txtDataEmissao2' => 'nullable|max:10',
            'txtDataSaida2' => 'nullable|max:10',
            'txtCargo2' => 'nullable',
            'txtAtividadesRealizadas2' => 'nullable',
            'txtNomeEmpresa3' => 'nullable',
            'txtDataEmissao3' => 'nullable|max:10',
            'txtDataSaida3' => 'nullable|max:10',
            'txtCargo3' => 'nullable',
            'txtAtividadesRealizadas3' => 'nullable'
        ]);
    }
}
