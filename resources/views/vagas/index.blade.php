@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Vagas</h3></div>
                    {{--  <div class="panel-heading">Página {{ $vagas->currentPage() }} of {{ $vagas->lastPage() }}</div>  --}}
                    @if(count($vagas) > 0)
                        @foreach ($vagas as $vaga)
                            <div class="panel-body">
                                <li style="list-style-type:disc">
                                    <a href="{{ route('vagas.show', $vaga->id ) }}"><b>{{ $vaga->cargo }}</b><br>
                                        <p class="teaser">
                                        {{  str_limit($vaga->descricao, 100) }} {{-- Limit teaser to 100 characters --}}
                                        </p>
                                    </a>
                                </li>
                            </div>
                        @endforeach
                    @else
                        <h1>Ainda não temos vagas..</h1>
                    @endif
                    </div>
                </div>
            </div>
        </div>
@endsection