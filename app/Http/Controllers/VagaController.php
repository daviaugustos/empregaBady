<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Auth;
use Session;
use App\Vaga;

class VagaController extends Controller {

    public function __construct() {
        $this->middleware(['auth', 'clearance'])->except('index', 'show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index() {
        //$vagas = Vaga::orderby('id', 'desc')->paginate(5); //show only 5 items at a time in descending order

        $vagas = DB::table('vagas')
            ->where('status', 'ABERTA')->get();
        return view('vagas.index', compact('vagas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('vagas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) { 

    $this->validate($request, [
        'cargo'=>'required|max:100',
    ]);

 

    // $vaga = Vaga::create($request->only('cargo', 'quantidadeVagas', 'salario', 'beneficios', 'local', 
    //                                         'diaSemana', 'horario', 'faixaEtaria', 'sexo', 'tipo', 'cnhExigida', 'descricao'));

    $vaga = Vaga::create([
        'cargo' => $request['cargo'],
        'quantidadeVagas' => $request['quantidadeVagas'],
        'salario' => $request['salario'],
        'beneficios' => $request['beneficios'],
        'local' => $request['local'],
        'diaSemana' => $request['diaSemana'],
        'horario' => $request['horario'],
        'faixaEtaria' => $request['faixaEtaria'],
        'sexo' => $request['sexo'],
        'tipo' => $request['tipo'],
        'cnhExigida' => $request['cnhExigida'],
        'descricao' => $request['descricao'],
        'status' => 'AGUARDANDO ANALISE',
        'idEmpresa' => Auth::id(),
    ]);
    //Display a successful message upon save
        return redirect()->route('vagas.index')
            ->with('flash_message', 'A vaga: 
             '. $vaga->cargo.' foi criada com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $vaga = Vaga::findOrFail($id); //Find post of id = $id
        $usuarioJaAplicou = $this->verificarVagaJaPreenchida($id);

        return view ('vagas.show', ['vaga' => $vaga, 'usuarioJaAplicou' => $usuarioJaAplicou]);
    }

    public function verificarVagaJaPreenchida ($vagaId){
        $userId = Auth::id();
        
        $users = DB::table('user_vaga')->where([
            ['user_id', '=', $userId],
            ['vaga_id', '=', $vagaId],
        ])->get();

        return count($users) > 0 ? TRUE : FALSE;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $vaga = Vaga::findOrFail($id);

        return view('vagas.edit', compact('vaga'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $this->validate($request, [
            'cargo'=>'required|max:100',
        ]);

        $vaga = Vaga::findOrFail($id);
        $vaga->cargo = $request->input('cargo');
        $vaga->quantidadeVagas = $request->input('quantidadeVagas');
        $vaga->salario = $request->input('salario');
        $vaga->beneficios = $request->input('beneficios');
        $vaga->local = $request->input('local');
        $vaga->diaSemana = $request->input('diaSemana');
        $vaga->horario = $request->input('horario');
        $vaga->faixaEtaria = $request->input('faixaEtaria');
        $vaga->sexo = $request->input('sexo');
        $vaga->tipo = $request->input('tipo');
        $vaga->cnhExigida = $request->input('cnhExigida');
        $vaga->descricao = $request->input('descricao');
        $vaga->save();

        return redirect()->route('vagas.show', 
            $vaga->id)->with('flash_message', 
            'Vaga para '. $vaga->cargo.' atualizada');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $vaga = Vaga::findOrFail($id);
        $vaga->delete();

        return redirect()->route('vagas.index')
            ->with('flash_message',
             'Vaga apagada com sucesso!');

    }

    public function aplicarCandidato($idVaga, $idCandidato){

        DB::table('user_vaga')->insert([
            'user_id' => $idCandidato, 
            'vaga_id' => $idVaga
        ]);

        echo "ta salvo";
    }

    public function minhasVagasView(){
        $vagas = DB::table('vagas')
            ->where('idEmpresa', Auth::id())->get();
        $viewBag = [
            'vagas' => $vagas
        ];
        return view('vagas.minhas-vagas', $viewBag);
    }

    public function recuperarTodasVagas(){
        return;
    }

    public function fecharVaga($idVaga){
        DB::table('vagas')
            ->where('id', $idVaga)
            ->update(['status' => 'FECHADA']);

        return redirect()
            ->route('minhasVagasView')
            ->with('flash_message', 'Vaga fechada com sucesso!');
    }

    public function verCandidatos($idVaga){
        $candidatosVaga = DB::table('user_vaga')
            ->where('vaga_id', $idVaga)->get();

        $arrayCandidatosVaga = array();
            
        foreach($candidatosVaga as $candidato){
            $queryUserVagas = DB::table('users')
                ->where('id', $candidato->user_id)->get();

            $userDados = $queryUserVagas->first();
            
            $queryCandidatoDados = DB::table('candidatos')
                ->where('id', $userDados->contactable_id)->get();
            
            $candidatoDados = $queryCandidatoDados->first();
            array_push($arrayCandidatosVaga, $candidatoDados);
        }
        print_r($arrayCandidatosVaga);
    }
}