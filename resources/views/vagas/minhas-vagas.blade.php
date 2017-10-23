{{-- \resources\views\permissions\index.blade.php --}}
@extends('layouts.app')

@section('title', '| Minhas Vagas')

@section('content')

<div class="table-responsive">
  <h2>Minhas vagas</h2>           
  <table class="table">
    <thead>
      <tr>
        <th>Cargo</th>
        <th>Status</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($vagas as $vaga)
        <tr>
          <td class="col-md-6">{{$vaga->cargo}}</td>
          <td class="col-md-2">{{$vaga->status}}</td>
          <td class="col-md-2">
            <a href="{{ route('verCandidatos', $vaga->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">
              Ver candidatos
            </a>
          </td>
          @if($vaga->status != "FECHADA")
              <td class="col-md-2">
                <a href="{{ route('fecharVaga', $vaga->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">
                  Fechar vaga
                </a>
              </td>
          @endif
        </tr>  
      @endforeach
    </tbody>
  </table>
@endsection