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
    protected function salvarCandidato(Request $data)
    {

        $dados = new Candidato;
        $dados->cpf = $data['cpf'];
        $dados->rg = $data['rg'];
        $dados->dataExpedicao = $data['dataExpedicao'];
        $dados->sexo = $data['sexo'];
        $dados->dataNascimento = $data['dataNascimento'];
        $dados->nomePai = $data['nomePai'];
        $dados->nomeMae = $data['nomeMae'];
        $dados->escolaridade = $data['escolaridade'];
        $dados->cnhCategorias = $data['cnhCategorias'];
        $dados->cursos = $data['cursos'];
        $dados->estadoCivil = $data['estadoCivil'];
        $dados->quantidadeFilhos = $data['quantidadeFilhos'];
        $dados->enderecoCep = $data['enderecoCep'];
        $dados->enderecoLogradouro = $data['enderecoLogradouro'];
        $dados->enderecoNumero = $data['enderecoNumero'];
        $dados->enderecoComplemento = $data['enderecoComplemento'];
        $dados->enderecoBairro = $data['enderecoBairro'];

        $dados->nomeEmpresa1 = $data['nomeEmpresa1'];
        $dados->dataAdmissao1 = $data['dataAdmissao1'];
        $dados->dataSaida1 = $data['dataSaida1'];
        $dados->cargo1 = $data['cargo1'];
        $dados->atividadesRealizadas1 = $data['atividadesRealizadas1'];

        $dados->nomeEmpresa2 = $data['nomeEmpresa2'];
        $dados->dataAdmissao2 = $data['dataAdmissao2'];
        $dados->dataSaida2 = $data['dataSaida2'];
        $dados->cargo2 = $data['cargo2'];
        $dados->atividadesRealizadas2 = $data['atividadesRealizadas2'];

        $dados->nomeEmpresa3 = $data['nomeEmpresa3'];
        $dados->dataAdmissao3 = $data['dataAdmissao3'];
        $dados->dataSaida3 = $data['dataSaida3'];
        $dados->cargo3 = $data['cargo3'];
        $dados->atividadesRealizadas3 = $data['atividadesRealizadas3'];

        $dados->cargoPretendido1 = $data['cargoPretendido1'];
        $dados->cargoPretendido2 = $data['cargoPretendido2'];
        $dados->cargoPretendido3 = $data['cargoPretendido3'];
        $dados->save();

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'telefone' => $data['telefone'],
            'celular' => $data['celular'],
            'enderecoCidade' => $data['enderecoCidade'],
            'enderecoEstado' => $data['enderecoEstado'],
            'contactable_id' => $dados->id,
            'contactable_type' => 'App\Candidato',
        ]);
        $user->assignRole('Candidato');
        
        $this->guard()->login($user);

        return redirect($this->redirectPath());
    }

    public function registrarEmpresaView(){
        return view('auth.registrarEmpresa');
    }

    public function salvarEmpresa(Request $data){
        $dados = new Empresa;
        $dados->razaoSocial = $data['razaoSocial'];
        $dados->cnpj = $data['cnpj'];
        $dados->nomeFantasia = $data['nomeFantasia'];
        $dados->inscricaoMunicipal = $data['inscricaoMunicipal'];
        $dados->inscricaoEstadual = $data['inscricaoEstadual'];
        $dados->descricao = $data['descricao'];
        $dados->cpf = $data['cpf'];
        $dados->nomeEmpregador = $data['celular'];
        $dados->save();

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'telefone' => $data['telefone'],
            'celular' => $data['celular'],
            'enderecoCidade' => $data['enderecoCidade'],
            'enderecoEstado' => $data['enderecoEstado'],
            'contactable_id' => $dados->id,
            'contactable_type' => 'App\Empresa',
        ]);
        $user->assignRole('Empresa');
        
        $this->guard()->login($user);

        return redirect($this->redirectPath());
    }
}
