@extends('layouts.app')

@section('title', '| Criar uma nova vaga')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <h1>Cadastrar uma nova vaga</h1>
            <hr>

            {{-- Using the Laravel HTML Form Collective to create our form --}}
            {{ Form::open(array('route' => 'vagas.store')) }}

            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                    {{ Form::label('cargo', 'Cargo') }}
                    {{ Form::text('cargo', null, array('class' => 'form-control')) }}
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">  
                    <div class="col-md-6">
                        {{ Form::label('quantidadeVagas', 'Quantidade de vagas') }}
                        {{ Form::number('quantidadeVagas', null, array('class' => 'form-control')) }}
                    </div>
                    <div class="col-md-6">
                        {{ Form::label('salario', 'Salário') }}
                        {{ Form::text('salario', null, array('class' => 'form-control')) }}
                    </div>
                </div>
            </div>            
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        {{ Form::label('beneficios', 'Benefícios') }}
                        {{ Form::text('beneficios', null, array('class' => 'form-control')) }}
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">    
                        {{ Form::label('local', 'Local de trabalho') }}
                        {{ Form::text('local', null, array('class' => 'form-control')) }}
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">  
                    <div class="col-md-6">
                        {{ Form::label('diaSemana', 'Dias da semana') }}
                        {{ Form::text('diaSemana', null, array('class' => 'form-control')) }}
                    </div>
                    <div class="col-md-6">
                        {{ Form::label('horario', 'Horário') }}
                        {{ Form::text('horario', null, array('class' => 'form-control')) }}
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">  
                    <div class="col-md-4">
                        {{ Form::label('faixaEtaria', 'Faixa etária') }}
                        {{ Form::text('faixaEtaria', null, array('class' => 'form-control')) }}
                    </div>
                    <div class="col-md-4">
                        {{ Form::label('sexo', 'Sexo') }}
                        {{ Form::text('sexo', null, array('class' => 'form-control')) }}
                    </div>
                    <div class="col-md-4">
                        {{ Form::label('tipo', 'Tipo de contratação') }}
                        {{ Form::text('tipo', null, array('class' => 'form-control')) }}
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">    
                        {{ Form::label('cnhExigida', 'CNH exigida') }}
                        {{ Form::text('cnhExigida', null, array('class' => 'form-control')) }}
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">    
                        {{ Form::label('descricao', 'Descrição da vaga') }}
                        {{ Form::textarea('descricao', null, array('class' => 'form-control', 'size' => '1x5')) }}
                    </div>
                </div>
            </div>

            {{ Form::submit('Cadastrar vaga', array('class' => 'btn btn-success btn-lg btn-block')) }}
            {{ Form::close() }}
        </div>
    </div>

@endsection