@extends('layouts.app')

@section('cssCustom')
    <link rel="stylesheet" href="{{asset('css/cadastroCandidato-custom.css')}}">
@endsection

@section('content')
<div class="container-fluid">         
    <form class="form-horizontal" method="POST" action="{{ route('salvarEmpresa') }}">
        {{ csrf_field() }}

        <fieldset class="col-md-12">
            <legend>Dados para acesso</legend>
            <div class="panel panel-default">
                <div class="panel-body">
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

        <fieldset class="col-md-12">
            <legend>Dados do empregador</legend>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="optradio" class="col-form-label">Tipo de empregador</label>
                                <div class="radio">
                                    <label><input type="radio" name="tipoEmpregador" id="radioPessoaFisica" value="FISICA">Pessoa física</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="tipoEmpregador" id="radioPessoaJuridica" value="JURIDICA" checked>Pessoa jurídica</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="name" class="col-form-label">Nome do responsável</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name')}}" placeholder="Nome" required>
                            </div>
                        </div>
                    </div>
                    <div id="dadosPessoaJuridica">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="razaoSocial" class="col-form-label">Razão social</label>
                                    <input type="text" class="form-control" id="razaoSocial" name=" " value="{{ old('razaoSocial')}}" placeholder="Razão social da empresa" >
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="cnpj" class="col-form-label">CNPJ</label>
                                    <input type="text" class="form-control" id="cnpj" name="cnpj" value="{{ old('cnpj')}}" placeholder="CNPJ" >
                                </div>
                                <div class="col-md-6">
                                    <label for="nomeFantasia" class="col-form-label">Nome fantasia</label>
                                    <input type="text" class="form-control" id="nomeFantasia" name="nomeFantasia" value="{{ old('nomeFantasia')}}" placeholder="Nome fantasia" >
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="inscricaoMunicipal" class="col-form-label">Inscrição municipal</label>
                                    <input type="text" class="form-control" id="inscricaoMunicipal" name="inscricaoMunicipal" value="{{ old('inscricaoMunicipal')}}" placeholder="Inscrição municipal">
                                </div>
                                <div class="col-md-6">
                                    <label for="inscricaoEstadual" class="col-form-label">Inscrição estadual</label>
                                    <input type="text" class="form-control" id="inscricaoEstadual" name="inscricaoEstadual" value="{{ old('inscricaoEstadual')}}" placeholder="Inscrição estadual">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="dadosPessoaFisica">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="cpf" class="col-form-label">CPF</label>
                                    <input type="text" class="form-control" id="cpf" name="cpf" value="{{ old('cpf')}}" placeholder="Informe seu CPF">            
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">  
                        <div class="row">
                            <div class="col-md-6">
                                <label for="telefone" class="col-form-label">Telefone</label>
                                <input type="text" class="form-control" id="telefone" name="telefone" value="{{ old('telefone')}}" placeholder="(99) 99999-9999" required>
                            </div>
                            <div class="col-md-6">
                                <label for="celular" class="col-form-label">Celular</label>
                                <input type="text" class="form-control" id="celular" name="celular" value="{{ old('celular')}}" placeholder="(99) 99999-9999" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="col-form-label" for="enderecoEstado">Estado</label>
                                <select class="form-control" id="enderecoEstado" name="enderecoEstado" required>
                                    <option value="">Selecione o estado</option>
                                    <option value="1" {{ (old('enderecoEstado') == '1' ? 'selected':'') }}>São Paulo</option>
                                </select> 
                            </div>
                            <div class="col-md-6">
                                <label class="col-form-label" for="enderecoCidade">Cidade</label>
                                <select class="form-control" id="enderecoCidade" name="enderecoCidade" required>
                                    <option value="">Selecione a cidade</option>
                                    <option value="1" {{ (old('enderecoCidade') == '1' ? 'selected':'') }}>Bady Bassitt</option>
                                </select> 
                            </div>
                        </div>   
                    </div>
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="descricao">Descrição</label>
                                <textarea style="resize: none;" class="form-control" id="descricao" name="descricao" value="{{ old('descricao')}}" rows="4" required></textarea>
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
                    Cadastrar
                </button>
            </div>
        </div>
    </form> 
</div>
@endsection
@section('scriptCustom')
    <script src="{{asset('js/cadastroEmpresa-custom.js')}}"></script>
    <script src="{{asset('js/jquery.mask.min.js')}}"></script>
@endsection