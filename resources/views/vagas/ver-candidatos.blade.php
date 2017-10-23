{{-- \resources\views\permissions\index.blade.php --}}
@extends('layouts.app')

@section('title', '| Candidatos para a vaga XXXXX')

@section('content')

<div class="table-responsive">
  <h2>Candidatos para a vaga XXXXX</h2>           
  <table class="table">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Possui experiência profissional?</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($candidatos as $candidato)
        <tr>
          <td class="col-md-6">{{$candidato->cargoPretendido1}}</td>
          <td class="col-md-6">{{$candidato->cargoPretendido2}}</td>
        </tr>  
      @endforeach
    </tbody>
  </table>
@endsection