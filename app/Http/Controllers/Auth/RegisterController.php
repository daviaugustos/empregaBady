<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Candidato;
use App\Empresa;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {

        $dados = new Candidato;
        $dados->cpf = "445.211.478-44";
        $dados->rg = "49.659.203-8";
        $dados->dataExpedicao = "2015-05-09";
        $dados->sexo = "MASCULINO";
        $dados->dataNascimento = "1997-05-09";
        $dados->nomePai = "Alexandre Correa dos Santos";
        $dados->nomeMae = "Sonia Regina Leme da Silva";
        $dados->escolaridade = "SUPERIOR_INCOMPLETO";
        $dados->cnhCategorias = "A";
        $dados->cursos = "vários cursos";
        $dados->estadoCivil = "SOLTEIRO";
        $dados->quantidadeFilhos = 0;
        $dados->enderecoCep = "15115-000";
        $dados->enderecoLogradouro = "Rua Antônio Marques de Mendonça";
        $dados->enderecoNumero = "201";
        $dados->enderecoComplemento = "casa da frente";
        $dados->enderecoBairro = "Colina Sul 1";
        $dados->cargoPretendido1 = "Programador";
        $dados->cargoPretendido2 = "Analista de TI";
        $dados->cargoPretendido3 = "Suporte";
        $dados->save();

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'telefone' => '173258-3882',
            'celular' => '17991490943',
            'enderecoCidade' => '1',
            'enderecoEstado' => '1',
            'contactable_id' => $dados->id,
            'contactable_type' => 'App\Candidato',
        ]);
    }

    public function registerEmpresa(Request $data){
        $dados = new Empresa;
        $dados->razaoSocial = "Coca Cola Indústrias Ltda.";
        $dados->cnpj = "68.623.590/0001-42";
        $dados->nomeFantasia = "Coca Cola";
        $dados->inscricaoMunicipal = "9999999";
        $dados->inscricaoEstadual = "99999999";
        $dados->descricao = "Empresa voltada para a indústria de bebidas";
        $dados->cpf = "";
        $dados->nomeEmpregador = "";
        $dados->save();

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'telefone' => '173258-3882',
            'celular' => '17991490943',
            'enderecoCidade' => '1',
            'enderecoEstado' => '1',
            'contactable_id' => $dados->id,
            'contactable_type' => 'App\Empresa',
        ]);

        $this->guard()->login($user);

        return redirect($this->redirectPath());
    }
}
