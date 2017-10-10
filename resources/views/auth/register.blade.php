@extends('layouts.app')

@section('cssCustom')
    <link rel="stylesheet" href="{{asset('css/cadastros-custom.css')}}">
@endsection

@section('content')
<div class="container-fluid">         
    <form class="form-horizontal" method="POST" action="{{ route('salvarCandidato') }}">
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
            <legend>Dados pessoais</legend>
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
                            <div class="col-md-5">
                                <label for="cpf" class="col-form-label">CPF</label>
                                <input type="text" class="form-control" id="cpf" name="cpf" value="{{ old('cpf')}}" placeholder="Informe seu CPF" required>            
                            </div>
                            <div class="col-md-4">
                                <label class="col-form-label" for="sexo">Sexo</label>
                                <select class="form-control" id="sexo" name="sexo" required>
                                    <option value="">Selecione o sexo</option>
                                    <option {{ (old('sexo') == 'FEMININO' ? 'selected':'') }}>Feminino</option>
                                    <option {{ (old('sexo') == 'MASCULINO' ? 'selected':'') }}>Masculino</option>
                                    <option {{ (old('sexo') == 'OUTRO' ? 'selected':'') }}>Outro</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="dataNascimento" class="col-form-label">Data de nascimento</label>
                                <input type="text" class="form-control" id="dataNascimento" name="dataNascimento" value="{{ old('dataNascimento')}}" placeholder="DD/MM/AAAA" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-8">
                                <label for="rg" class="col-form-label">RG</label>
                                <input type="text" class="form-control" id="rg" name="rg" value="{{ old('rg')}}" placeholder="Informe seu RG" required>
                            </div>
                            <div class="col-md-4">
                                <label for="dataExpedicao" class="col-form-label">Data de expedição</label>
                                <input type="text" class="form-control" id="dataExpedicao" name="dataExpedicao" value="{{ old('dataExpedicao')}}" placeholder="Referente ao RG" required>
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
                            <div class="col-md-6">
                                <label for="nomePai" class="col-form-label">Nome do pai</label>
                                <input type="text" class="form-control" id="nomePai" name="nomePai" value="{{ old('nomePai')}}" placeholder="Nome completo" required>
                            </div>
                            <div class="col-md-6">
                                <label for="nomeMae" class="col-form-label">Nome da mãe</label>
                                <input type="text" class="form-control" id="nomeMae" name="nomeMae" value="{{ old('nomeMae')}}" placeholder="Nome completo" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">  
                        <div class="row">
                            <div class="col-md-4">
                                <label class="col-form-label" for="estadoCivil">Estado civil</label>
                                <select class="form-control" id="estadoCivil" name="estadoCivil" required>
                                    <option value="" selected>Selecione o estado civil</option>
                                    <option {{ (old('estadoCivil') == 'CASADO' ? 'selected':'') }}>Casado</option>
                                    <option {{ (old('estadoCivil') == 'SOLTEIRO' ? 'selected':'') }}>Solteiro</option>
                                    <option {{ (old('estadoCivil') == 'DIVORCIADO' ? 'selected':'') }}>Divorciado</option>
                                    <option {{ (old('estadoCivil') == 'DESQUITADO' ? 'selected':'') }}>Desquitado</option>
                                    <option {{ (old('estadoCivil') == 'CONCUBINATO' ? 'selected':'') }}>Concubinato</option>
                                    <option {{ (old('estadoCivil') == 'VIUVO' ? 'selected':'') }}>Viúvo</option>
                                    <option {{ (old('estadoCivil') == 'UNIAO_ESTAVEL' ? 'selected':'') }}>União estável</option>
                                    <option {{ (old('estadoCivil') == 'OUTROS' ? 'selected':'') }}>Outros</option>
                                </select>
                            </div>  
                            <div class="col-md-3">
                                <label for="quantidadeFilhos" class="col-form-label">Quantidade de filhos</label>
                                <input type="number" class="form-control" id="quantidadeFilhos" name="quantidadeFilhos" value="{{ old('quantidadeFilhos')}}" placeholder="2" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="enderecoCep" class="col-form-label">CEP</label>
                                <input type="text" class="form-control" id="enderecoCep" name="enderecoCep" value="{{ old('enderecoCep')}}" placeholder="XXXXX-XX" required>            
                            </div>
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
                                <label for="enderecoLogradouro" class="col-form-label">Logradouro</label>
                                <input type="text" class="form-control" id="enderecoLogradouro" name="enderecoLogradouro" value="{{ old('enderecoLogradouro')}}" placeholder="Rua da colina dos exemplos" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="enderecoBairro" class="col-form-label">Bairro</label>
                                <input type="text" class="form-control" id="enderecoBairro" name="enderecoBairro" value="{{ old('enderecoBairro')}}" placeholder="Bairro dos exemplos" required>
                            </div>
                            <div class="col-md-3">
                                <label for="enderecoNumero" class="col-form-label">Número</label>
                                <input type="text" class="form-control" id="enderecoNumero" name="enderecoNumero" value="{{ old('enderecoNumero')}}" placeholder="9999" required>
                            </div>
                            <div class="col-md-3">
                                <label for="enderecoComplemento" class="col-form-label">Complemento</label>
                                <input type="text" class="form-control" id="enderecoComplemento" name="enderecoComplemento" value="{{ old('enderecoComplemento')}}" placeholder="Casa" required>
                            </div>
                        </div>
                    </div>
                </div>
        </fieldset>

        <fieldset class="col-md-12">
            <legend>Dados profissionais</legend>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <label class="col-form-label" for="escolaridade">Escolaridade</label>
                                <select class="form-control" id="escolaridade" name="escolaridade" required>
                                    <option value="">Selecione a escolaridade</option>
                                    <option {{ (old('escolaridade') == 'ANALFABETO' ? 'selected':'') }}>Analfabeto</option>
                                    <option {{ (old('escolaridade') == 'FUNDAMENTAL_INCOMPLETO' ? 'selected':'') }}>Fundamental Incompleto</option>
                                    <option {{ (old('escolaridade') == 'FUNDAMENTAL_COMPLETO' ? 'selected':'') }}>Fundamental Completo</option>
                                    <option {{ (old('escolaridade') == 'MEDIO_INCOMPLETO' ? 'selected':'') }}>Médio Incompleto</option>
                                    <option {{ (old('escolaridade') == 'MEDIO_COMPLETO' ? 'selected':'') }}>Médio Completo</option>
                                    <option {{ (old('escolaridade') == 'SUPERIOR_INCOMPLETO' ? 'selected':'') }}>Superior Incompleto</option>
                                    <option {{ (old('escolaridade') == 'SUPERIOR_COMPLETO' ? 'selected':'') }}>Superior Completo</option>
                                    <option {{ (old('escolaridade') == 'ESPECIALIZACAO' ? 'selected':'') }}>Especialização</option>
                                    <option {{ (old('escolaridade') == 'MESTRADO' ? 'selected':'') }}>Mestrado</option>
                                    <option {{ (old('escolaridade') == 'DOUTORADO' ? 'selected':'') }}>Doutorado</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="cnhCategorias" class="col-form-label">Categorias CNH</label>
                                <input type="text" class="form-control" id="cnhCategorias" name="cnhCategorias" value="{{ old('cnhCategorias')}}" placeholder="A B" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="cursos">Cursos</label>
                                <textarea style="resize: none;" class="form-control" id="cursos" name="cursos" value="{{ old('cursos')}}" rows="4" required></textarea>
                            </div>  
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="cargoPretendido1" class="col-form-label">Cargo pretendido 1ª opção</label>
                                <input type="text" class="form-control" id="cargoPretendido1" name="cargoPretendido1" value="{{ old('cargoPretendido1')}}"  placeholder="Empacotador de exemplos" required>
                            </div>  
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="cargoPretendido2" class="col-form-label">Cargo pretendido 2ª opção</label>
                                <input type="text" class="form-control" id="cargoPretendido2" name="cargoPretendido2" value="{{ old('cargoPretendido2')}}" placeholder="Exemplo de empacotador" required>
                            </div>  
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="cargoPretendido3" class="col-form-label">Cargo pretendido 3ª opção</label>
                                <input type="text" class="form-control" id="cargoPretendido3" name="cargoPretendido3" value="{{ old('cargoPretendido3')}}" placeholder="Exemplista empacotante" required>
                            </div>  
                        </div>
                    </div>
                <div>
            </div>
        </fieldset>

        <fieldset class="col-md-12">
            <legend>Histórico profissional</legend>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="form-check-label">
                                    <input type="checkbox" id="chkPrimeiroEmprego" name="chkPrimeiroEmprego" class="form-check-input">
                                    Estou em busca de meu primeiro emprego!
                                </label>
                            </div>
                        </div>
                    </div>
                    <div id="historicoProfissionalEmpresas">
                        <!--Empresa 1 -->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="nomeEmpresa1" class="col-form-label">Nome da empresa 1</label>
                                    <input type="text" class="form-control" id="nomeEmpresa1" name="nomeEmpresa1" value="{{ old('nomeEmpresa1')}}" placeholder="Empresa Exemplo Exemplista">
                                </div>  
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="dataAdmissao1" class="col-form-label">Data de admissão</label>
                                    <input type="text" class="form-control" id="dataAdmissao1" name="dataAdmissao1" value="{{ old('dataAdmissao1')}}" placeholder="DD/MM/AAAA">
                                </div>
                                <div class="col-md-3">
                                    <label for="dataSaida1" class="col-form-label">Data de saída</label>
                                    <input type="text" class="form-control" id="dataSaida1" name="dataSaida1" value="{{ old('dataSaida1')}}" placeholder="DD/MM/AAAA">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="cargo1" class="col-form-label">Cargo</label>
                                    <input type="text" class="form-control" id="cargo1" name="cargo1" value="{{ old('cargo1')}}" placeholder="Empacotador de exemplos">
                                </div> 
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="atividadesRealizadas1">Atividades realizadas</label>
                                    <textarea style="resize: none;" class="form-control" id="atividadesRealizadas1" value="{{ old('atividadesRealizadas1')}}" name="atividadesRealizadas1" rows="4"></textarea>
                                </div> 
                            </div>
                        </div>

                        <!--Empresa 2 -->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="nomeEmpresa2" class="col-form-label">Nome da empresa 2</label>
                                    <input type="text" class="form-control" id="nomeEmpresa2" name="nomeEmpresa2" value="{{ old('nomeEmpresa2')}}" placeholder="Empresa Exemplo Exemplista">
                                </div>  
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="dataAdmissao2" class="col-form-label">Data de admissão</label>
                                    <input type="text" class="form-control" id="dataAdmissao2" name="dataAdmissao2" value="{{ old('dataAdmissao2')}}" placeholder="DD/MM/AAAA">
                                </div>
                                <div class="col-md-3">
                                    <label for="dataSaida2" class="col-form-label">Data de saída</label>
                                    <input type="text" class="form-control" id="dataSaida2" name="dataSaida2" value="{{ old('dataSaida2')}}" placeholder="DD/MM/AAAA">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="cargo2" class="col-form-label">Cargo</label>
                                    <input type="text" class="form-control" id="cargo2" name="cargo2" value="{{ old('cargo2')}}" placeholder="Empacotador de exemplos">
                                </div> 
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="atividadesRealizadas2">Atividades realizadas</label>
                                    <textarea style="resize: none;" class="form-control" id="atividadesRealizadas2" value="{{ old('atividadesRealizadas2')}}" name="atividadesRealizadas2" rows="4"></textarea>
                                </div> 
                            </div>
                        </div>

                        <!--Empresa 3 -->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="nomeEmpresa3" class="col-form-label">Nome da empresa 3</label>
                                    <input type="text" class="form-control" id="nomeEmpresa3" name="nomeEmpresa3" value="{{ old('nomeEmpresa3')}}" placeholder="Empresa Exemplo Exemplista">
                                </div>  
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="dataAdmissao3" class="col-form-label">Data de admissão</label>
                                    <input type="text" class="form-control" id="dataAdmissao3" name="dataAdmissao3" value="{{ old('dataAdmissao3')}}" placeholder="DD/MM/AAAA">
                                </div>
                                <div class="col-md-3">
                                    <label for="dataSaida3" class="col-form-label">Data de saída</label>
                                    <input type="text" class="form-control" id="dataSaida3" name="dataSaida3" value="{{ old('dataSaida3')}}" placeholder="DD/MM/AAAA">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="cargo3" class="col-form-label">Cargo</label>
                                    <input type="text" class="form-control" id="cargo3" name="cargo3" value="{{ old('cargo3')}}" placeholder="Empacotador de exemplos">
                                </div> 
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="atividadesRealizadas3">Atividades realizadas</label>
                                    <textarea style="resize: none;" class="form-control" id="atividadesRealizadas3" value="{{ old('atividadesRealizadas3')}}" name="atividadesRealizadas3" rows="4"></textarea>
                                </div> 
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
                    Cadastrar
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