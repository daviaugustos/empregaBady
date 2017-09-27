<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $vagas = Vaga::orderby('id', 'desc')->paginate(5); //show only 5 items at a time in descending order

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

    //Validating title and body field
        $this->validate($request, [
            'cargo'=>'required|max:100',
            ]);

        // $title = $request['title'];
        // $body = $request['body'];

        $vaga = Vaga::create($request->only('cargo', 'quantidadeVagas', 'salario', 'beneficios', 'local', 
                                            'diaSemana', 'horario', 'faixaEtaria', 'sexo', 'tipo', 'cnhExigida', 'descricao'));

    //Display a successful message upon save
        return redirect()->route('vagas.index')
            ->with('flash_message', 'Vaga para 
             '. $vaga->cargo.' criada com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $vaga = Vaga::findOrFail($id); //Find post of id = $id

        return view ('vagas.show', compact('vaga'));
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
}