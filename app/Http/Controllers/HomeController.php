<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Candidato;

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

    public function salvarCandidato(Request $request) {
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
            'txtCnhCategorias' => 'max:8',
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

        $novoCandidato = new Candidato;
        $novoCandidato->email = $request->txtEmail;
        $novoCandidato->senha = $request->password;
        $novoCandidato->nome = $request->txtNome;
        $novoCandidato->cpf = $request->txtCpf;
        $novoCandidato->rg = $request->txtRg;
        $novoCandidato->dataExpedicao = $request->txtDataExpedicao;
        $novoCandidato->sexo = $request->sltSexo;
        $novoCandidato->dataNascimento = $request->txtDataNascimento;
        $novoCandidato->telefone = $request->txtTelefone;
        $novoCandidato->celular = $request->txtCelular;
        $novoCandidato->nomePai = $request->txtNomePai;
        $novoCandidato->nomeMae = $request->txtNomeMae;
        $novoCandidato->escolaridade = $request->sltEscolaridade;
        $novoCandidato->cnhCategorias = $request->txtCnhCategorias;
        $novoCandidato->cursos = $request->txtCursos;
        $novoCandidato->estadoCivil = $request->sltEstadoCivil;
        $novoCandidato->quantidadeFilhos = $request->txtQuantidadeFilhos;
        $novoCandidato->enderecoCep = $request->txtEnderecoCep;
        $novoCandidato->enderecoLogradouro = $request->txtEnderecoLogradouro;
        $novoCandidato->enderecoNumero = $request->txtEnderecoNumero;
        $novoCandidato->enderecoComplemento = $request->txtEnderecoComplemento;
        $novoCandidato->enderecoBairro = $request->txtEnderecoBairro;
        $novoCandidato->enderecoCidade = $request->txtEnderecoCidade;
        $novoCandidato->enderecoEstado = $request->txtEnderecoEstado;

        $novoCandidato->nomeEmpresa1 = $request->txtNomeEmpresa1;
        $novoCandidato->dataAdmissao1 = $request->txtDataAdmissao1;
        $novoCandidato->dataSaida1 = $request->txtDataSaida1;
        $novoCandidato->cargo1 = $request->txtCargo1;
        $novoCandidato->atividadesRealizadas1 = $request->txtAtividadesRealizadas1;

        $novoCandidato->nomeEmpresa2 = $request->txtNomeEmpresa2;
        $novoCandidato->dataAdmissao2 = $request->txtDataEmissao2;
        $novoCandidato->dataSaida2 = $request->txtDataSaida2;
        $novoCandidato->cargo2 = $request->txtCargo2;
        $novoCandidato->atividadesRealizadas2 = $request->txtAtividadesRealizadas2;

        $novoCandidato->nomeEmpresa3 = $request->txtNomeEmpresa3;
        $novoCandidato->dataAdmissao3 = $request->txtDataEmissao3;
        $novoCandidato->dataSaida3 = $request->txtDataSaida3;
        $novoCandidato->cargo3 = $request->txtCargo3;
        $novoCandidato->atividadesRealizadas3 = $request->txtAtividadesRealizadas3;

        $novoCandidato->cargoPretendido1 = $request->txtCargoPretendido1;
        $novoCandidato->cargoPretendido2 = $request->txtCargoPretendido2;
        $novoCandidato->cargoPretendido3 = $request->txtCargoPretendido3;

        $novoCandidato->primeiroEmprego = $request->chkPrimeiroEmprego;

        $novoCandidato->save();
        return redirect()
            ->route('home');
    }
}
