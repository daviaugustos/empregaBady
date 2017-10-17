@extends('layouts.app')

@section('title', '| Ver vagas')

@section('content')

<div class="container">

    <h1>{{ $vaga->cargo }}</h1>
    <hr>
    <p class="lead">{{ $vaga->descricao }} </p>
    <hr>
    {!! Form::open(['method' => 'DELETE', 'route' => ['vagas.destroy', $vaga->id] ]) !!}
    <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
    @hasrole('Candidato')
    <a href="{{ route('aplicarCandidato', ['id' => Auth::id(), 'idVaga' => $vaga->id ]) }}" class="btn btn-info" role="button">Quero me candidatar</a>
    @endhasrole
    @if (!Auth::guest())
        @if(auth()->user()->hasrole('Candidato'))
            XDDDDDDDDDDDDDDDDDD
        @endif
    @endif
    @can('Editar Vaga')
    <a href="{{ route('vagas.edit', $vaga->id) }}" class="btn btn-info" role="button">Editar</a>
    @endcan
    @can('Deletar Vaga')
    {!! Form::submit('Apagar', ['class' => 'btn btn-danger']) !!}
    @endcan
    {!! Form::close() !!}

</div>

@endsection