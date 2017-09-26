@extends('layouts.app')

@section('title', '| Criar uma nova vaga')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        <h1>Cadastrar uma nova vaga</h1>
        <hr>

    {{-- Using the Laravel HTML Form Collective to create our form --}}
        {{ Form::open(array('route' => 'posts.store')) }}

        <div class="form-group">
            {{ Form::label('cargo', 'Cargo') }}
            {{ Form::text('cargo', null, array('class' => 'form-control')) }}
            <br>

            {{ Form::label('quantidadeVagas', 'Quantidade de vagas') }}
            {{ Form::number('quantidadeVagas', null, array('class' => 'form-control')) }}
            <br>

            {{ Form::label('salario', 'Salário') }}
            {{ Form::text('salario', null, array('class' => 'form-control')) }}
            <br>

            {{ Form::label('beneficios', 'Quantidade de vagas') }}
            {{ Form::text('beneficios', null, array('class' => 'form-control')) }}
            <br>

            {{ Form::label('local', 'Quantidade de vagas') }}
            {{ Form::text('local', null, array('class' => 'form-control')) }}
            <br>

            {{ Form::label('diaSemana', 'Quantidade de vagas') }}
            {{ Form::text('diaSemana', null, array('class' => 'form-control')) }}
            <br>

            {{ Form::label('quantidadeVagas', 'Quantidade de vagas') }}
            {{ Form::text('quantidadeVagas', null, array('class' => 'form-control')) }}
            <br>

            {{ Form::label('quantidadeVagas', 'Quantidade de vagas') }}
            {{ Form::text('quantidadeVagas', null, array('class' => 'form-control')) }}
            <br>

            {{ Form::label('quantidadeVagas', 'Quantidade de vagas') }}
            {{ Form::text('quantidadeVagas', null, array('class' => 'form-control')) }}
            <br>

            {{ Form::label('quantidadeVagas', 'Quantidade de vagas') }}
            {{ Form::text('quantidadeVagas', null, array('class' => 'form-control')) }}
            <br>

            {{ Form::label('quantidadeVagas', 'Quantidade de vagas') }}
            {{ Form::text('quantidadeVagas', null, array('class' => 'form-control')) }}
            <br>

            {{ Form::label('quantidadeVagas', 'Quantidade de vagas') }}
            {{ Form::text('quantidadeVagas', null, array('class' => 'form-control')) }}
            <br>

            {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block')) }}
            {{ Form::close() }}
        </div>
        </div>
    </div>

@endsection