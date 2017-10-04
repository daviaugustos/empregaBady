@extends('layouts.app')

@section('cssCustom')
    <link rel="stylesheet" href="{{asset('css/cadastroCandidato-custom.css')}}">
@endsection

@section('content')
<div class="container-fluid">         
    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}

        <fieldset class="col-md-12">
            <legend>Dados para acesso</legend>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="name" class="col-form-label">Nome</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name')}}" placeholder="Nome" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="email" class="col-form-label">Email</label>
                                <input type="email" class="form-control" id="name" name="email" value="{{ old('txtEmail')}}" placeholder="Endereço de email" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="password" class="col-form-label">Senha</label>
                                <input type="password" class="form-control" id="password" name="password" value="{{ old('password')}}" placeholder="Digite sua senha" required>
                            </div>
                            <div class="col-md-6">
                                <label for="password-confirm" class="col-form-label">Confirmação de senha</label>
                                <input type="password" class="form-control" id="password-confirm" name="password_confirmation" value="{{ old('password_confirmation')}}" placeholder="Repita a senha" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>

        {{--  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">Name</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">Email</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md-4 control-label">Password</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>
        </div>  --}}

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Register
                </button>
            </div>
        </div>
    </form> 
</div>
@endsection
@section('scriptCustom')
    <script src="{{asset('js/cadastroCandidato-custom.js')}}"></script>
    <script src="{{asset('js/jquery.mask.min.js')}}"></script>
@endsection