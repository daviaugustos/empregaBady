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
          @if($vaga->status == "ABERTA")
              <td class="col-md-2">
                <a href="#" class="btn btn-info pull-left" style="margin-right: 3px;">
                  Visualizar dados
                </a>
              </td>
          @endif
        </tr>  
      @endforeach
    </tbody>
  </table>
@endsection