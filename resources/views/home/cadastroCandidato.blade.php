@extends('layouts.menu-assets')

@section('cssCustom')
    <link rel="stylesheet" href="{{asset('css/cadastroCandidato-custom.css')}}">
@endsection

@section('pagina')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('salvarCandidato') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <fieldset class="form-group">
            <legend>Dados para acesso</legend>
            <div class="form-group">
                <label for="txtEmail" class="col-form-label">Email</label>
                <input type="email" class="form-control" id="txtEmail" name="txtEmail" value="{{ old('txtEmail')}}" placeholder="Endereço de email" required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="txtSenha" class="col-form-label">Senha</label>
                    <input type="password" class="form-control" id="txtSenha" name="password" value="{{ old('password')}}" placeholder="Digite sua senha" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="txtConfirmacaoSenha" class="col-form-label">Confirmação de senha</label>
                    <input type="password" class="form-control" id="txtConfirmacaoSenha" name="password_confirmation" value="{{ old('password_confirmation')}}" placeholder="Repita a senha" required>
                </div>
            </div>
        </fieldset>
        <fieldset class="form-group">
            <legend>Dados pessoais</legend>
            <div class="form-group">
                <label for="txtNome" class="col-form-label">Nome</label>
                <input type="text" class="form-control" id="txtNome" name="txtNome" value="{{ old('txtNome')}}" placeholder="Nome completo" required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="txtCpf" class="col-form-label">CPF</label>
                    <input type="text" class="form-control" id="txtCpf" name="txtCpf" value="{{ old('txtCpf')}}" placeholder="Informe seu CPF" required>            
                </div>
                <div class="form-group col-md-4">
                    <label class="col-form-label" for="sltSexo">Sexo</label>
                    <select class="form-control" id="sltSexo" name="sltSexo" required>
                        <option value="">Selecione o sexo</option>
                        <option {{ (old('sltSexo') == 'FEMININO' ? 'selected':'') }}>Feminino</option>
                        <option {{ (old('sltSexo') == 'MASCULINO' ? 'selected':'') }}>Masculino</option>
                        <option {{ (old('sltSexo') == 'OUTRO' ? 'selected':'') }}>Outro</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="txtDataNascimento" class="col-form-label">Data de nascimento</label>
                    <input type="text" class="form-control" id="txtDataNascimento" name="txtDataNascimento" value="{{ old('txtDataNascimento')}}" placeholder="DD/MM/AAAA" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for="txtRg" class="col-form-label">RG</label>
                    <input type="text" class="form-control" id="txtRg" name="txtRg" value="{{ old('txtRg')}}" placeholder="Informe seu RG" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="txtDataExpedicao" class="col-form-label">Data de expedição</label>
                    <input type="text" class="form-control" id="txtDataExpedicao" name="txtDataExpedicao" value="{{ old('txtDataExpedicao')}}" placeholder="Referente ao RG" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="txtTelefone" class="col-form-label">Telefone</label>
                    <input type="text" class="form-control" id="txtTelefone" name="txtTelefone" value="{{ old('txtTelefone')}}" placeholder="(99) 99999-9999" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="txtCelular" class="col-form-label">Celular</label>
                    <input type="text" class="form-control" id="txtCelular" name="txtCelular" value="{{ old('txtCelular')}}" placeholder="(99) 99999-9999" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="txtNomePai" class="col-form-label">Nome do pai</label>
                    <input type="text" class="form-control" id="txtNomePai" name="txtNomePai" value="{{ old('txtNomePai')}}" placeholder="Nome completo" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="txtNomeMae" class="col-form-label">Nome da mãe</label>
                    <input type="text" class="form-control" id="txtNomeMae" name="txtNomeMae" value="{{ old('txtNomeMae')}}" placeholder="Nome completo" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label class="col-form-label" for="sltEstadoCivil">Estado civil</label>
                    <select class="form-control" id="sltEstadoCivil" name="sltEstadoCivil" required>
                        <option value="" selected>Selecione o estado civil</option>
                        <option {{ (old('sltEstadoCivil') == 'CASADO' ? 'selected':'') }}>Casado</option>
                        <option {{ (old('sltEstadoCivil') == 'SOLTEIRO' ? 'selected':'') }}>Solteiro</option>
                        <option {{ (old('sltEstadoCivil') == 'DIVORCIADO' ? 'selected':'') }}>Divorciado</option>
                        <option {{ (old('sltEstadoCivil') == 'DESQUITADO' ? 'selected':'') }}>Desquitado</option>
                        <option {{ (old('sltEstadoCivil') == 'CONCUBINATO' ? 'selected':'') }}>Concubinato</option>
                        <option {{ (old('sltEstadoCivil') == 'VIUVO' ? 'selected':'') }}>Viúvo</option>
                        <option {{ (old('sltEstadoCivil') == 'UNIAO_ESTAVEL' ? 'selected':'') }}>União estável</option>
                        <option {{ (old('sltEstadoCivil') == 'OUTROS' ? 'selected':'') }}>Outros</option>
                    </select>
                </div>  
                <div class="form-group">
                    <label for="txtQuantidadeFilhos" class="col-form-label">Quantidade de filhos</label>
                    <input type="number" class="form-control" id="txtQuantidadeFilhos" name="txtQuantidadeFilhos" value="{{ old('txtQuantidadeFilhos')}}" placeholder="2" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="txtEnderecoCep" class="col-form-label">CEP</label>
                    <input type="text" class="form-control" id="txtEnderecoCep" name="txtEnderecoCep" value="{{ old('txtEnderecoCep')}}" placeholder="XXXXX-XX" required>            
                </div>
                <div class="form-group col-md-3">
                    <label class="col-form-label" for="sltEnderecoEstado">Estado</label>
                    <select class="form-control" id="sltEnderecoEstado" name="sltEnderecoEstado" required>
                        <option value="">Selecione o estado</option>
                        <option value="1" {{ (old('sltEnderecoEstado') == '1' ? 'selected':'') }}>São Paulo</option>
                    </select> 
                </div>
                <div class="form-group col-md-6">
                    <label class="col-form-label" for="sltEnderecoCidade">Cidade</label>
                    <select class="form-control" id="sltEnderecoCidade" name="sltEnderecoCidade" required>
                        <option value="">Selecione a cidade</option>
                        <option value="1" {{ (old('sltEnderecoCidade') == '1' ? 'selected':'') }}>Bady Bassitt</option>
                    </select> 
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="txtEnderecoLogradouro" class="col-form-label">Logradouro</label>
                    <input type="text" class="form-control" id="txtEnderecoLogradouro" name="txtEnderecoLogradouro" value="{{ old('txtEnderecoLogradouro')}}" placeholder="Rua da colina dos exemplos" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="txtEnderecoBairro" class="col-form-label">Bairro</label>
                    <input type="text" class="form-control" id="txtEnderecoBairro" name="txtEnderecoBairro" value="{{ old('txtEnderecoBairro')}}" placeholder="Bairro dos exemplos" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="txtEnderecoNumero" class="col-form-label">Número</label>
                    <input type="text" class="form-control" id="txtEnderecoNumero" name="txtEnderecoNumero" value="{{ old('txtEnderecoNumero')}}" placeholder="9999" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="txtEnderecoComplemento" class="col-form-label">Complemento</label>
                    <input type="text" class="form-control" id="txtEnderecoComplemento" name="txtEnderecoComplemento" value="{{ old('txtEnderecoComplemento')}}" placeholder="Casa" required>
                </div>
            </div>
        </fieldset>
        <fieldset class="form-group">
            <legend>Dados profissionais</legend>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label class="col-form-label" for="sltEscolaridade">Escolaridade</label>
                    <select class="form-control" id="sltEscolaridade" name="sltEscolaridade" required>
                        <option value="">Selecione a escolaridade</option>
                        <option {{ (old('sltEscolaridade') == 'ANALFABETO' ? 'selected':'') }}>Analfabeto</option>
                        <option {{ (old('sltEscolaridade') == 'FUNDAMENTAL_INCOMPLETO' ? 'selected':'') }}>Fundamental Incompleto</option>
                        <option {{ (old('sltEscolaridade') == 'FUNDAMENTAL_COMPLETO' ? 'selected':'') }}>Fundamental Completo</option>
                        <option {{ (old('sltEscolaridade') == 'MEDIO_INCOMPLETO' ? 'selected':'') }}>Médio Incompleto</option>
                        <option {{ (old('sltEscolaridade') == 'MEDIO_COMPLETO' ? 'selected':'') }}>Médio Completo</option>
                        <option {{ (old('sltEscolaridade') == 'SUPERIOR_INCOMPLETO' ? 'selected':'') }}>Superior Incompleto</option>
                        <option {{ (old('sltEscolaridade') == 'SUPERIOR_COMPLETO' ? 'selected':'') }}>Superior Completo</option>
                        <option {{ (old('sltEscolaridade') == 'ESPECIALIZACAO' ? 'selected':'') }}>Especialização</option>
                        <option {{ (old('sltEscolaridade') == 'MESTRADO' ? 'selected':'') }}>Mestrado</option>
                        <option {{ (old('sltEscolaridade') == 'DOUTORADO' ? 'selected':'') }}>Doutorado</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="txtCnhCategorias" class="col-form-label">Categorias CNH</label>
                    <input type="text" class="form-control" id="txtCnhCategorias" name="txtCnhCategorias" value="{{ old('txtCnhCategorias')}}" placeholder="A B" required>
                </div>
            </div>
            <div class="form-group">
                <label for="txtCursos">Cursos</label>
                <textarea style="resize: none;" class="form-control" id="txtCursos" name="txtCursos" value="{{ old('txtCursos')}}" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="txtCargoPretendido1" class="col-form-label">Cargo pretendido 1ª opção</label>
                <input type="text" class="form-control" id="txtCargoPretendido1" name="txtCargoPretendido1" value="{{ old('txtCargoPretendido1')}}"  placeholder="Empacotador de exemplos" required>
            </div>  
            <div class="form-group">
                <label for="txtCargoPretendido2" class="col-form-label">Cargo pretendido 2ª opção</label>
                <input type="text" class="form-control" id="txtCargoPretendido2" name="txtCargoPretendido2" value="{{ old('txtCargoPretendido2')}}" placeholder="Exemplo de empacotador" required>
            </div>  
            <div class="form-group">
                <label for="txtCargoPretendido3" class="col-form-label">Cargo pretendido 3ª opção</label>
                <input type="text" class="form-control" id="txtCargoPretendido3" name="txtCargoPretendido3" value="{{ old('txtCargoPretendido3')}}" placeholder="Exemplista empacotante" required>
            </div>
        </fieldset>
        <fieldset class="form-group">
            <legend>Histórico profissional</legend>
            <div class="form-group">
                <label class="form-check-label">
                    <input type="checkbox" id="chkPrimeiroEmprego" name="chkPrimeiroEmprego" class="form-check-input">
                    Estou em busca de meu primeiro emprego!
                </label>
            </div> 
            <div id="historicoProfissionalEmpresas">
                <!-- Empresa 1 -->
                <div class="form-group">
                    <label for="txtNomeEmpresa1" class="col-form-label">Nome da empresa 1</label>
                    <input type="text" class="form-control" id="txtNomeEmpresa1" name="txtNomeEmpresa1" value="{{ old('txtNomeEmpresa1')}}" placeholder="Empresa Exemplo Exemplista">
                </div>        
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="txtDataAdmissao1" class="col-form-label">Data de admissão</label>
                        <input type="text" class="form-control" id="txtDataAdmissao1" name="txtDataAdmissao1" value="{{ old('txtDataAdmissao1')}}" placeholder="DD/MM/AAAA">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="txtDataSaida1" class="col-form-label">Data de saída</label>
                        <input type="text" class="form-control" id="txtDataSaida1" name="txtDataSaida1" value="{{ old('txtDataSaida1')}}" placeholder="DD/MM/AAAA">
                    </div>
                </div>
                <div class="form-group">
                    <label for="txtCargo1" class="col-form-label">Cargo</label>
                    <input type="text" class="form-control" id="txtCargo1" name="txtCargo1" value="{{ old('txtCargo1')}}" placeholder="Empacotador de exemplos">
                </div> 
                <div class="form-group">
                    <label for="txtAtividadesRealizadas1">Atividades realizadas</label>
                    <textarea style="resize: none;" class="form-control" id="txtAtividadesRealizadas1" value="{{ old('txtAtividadesRealizadas1')}}" name="txtAtividadesRealizadas1" rows="4"></textarea>
                </div>

                <!-- Empresa 2 -->
                <div class="form-group">
                    <label for="txtNomeEmpresa2" class="col-form-label">Nome da empresa 2</label>
                    <input type="text" class="form-control" id="txtNomeEmpresa2" name="txtNomeEmpresa2" value="{{ old('txtNomeEmpresa2')}}" placeholder="Empresa Exemplo Exemplista">
                </div>        
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="txtDataAdmissao2" class="col-form-label">Data de admissão</label>
                        <input type="text" class="form-control" id="txtDataAdmissao2" name="txtDataAdmissao2" value="{{ old('txtDataAdmissao2')}}" placeholder="DD/MM/AAAA" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="txtDataSaida2" class="col-form-label">Data de saída</label>
                        <input type="text" class="form-control" id="txtDataSaida2" name="txtDataSaida2" value="{{ old('txtDataSaida2')}}" placeholder="DD/MM/AAAA" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="txtCargo2" class="col-form-label">Cargo</label>
                    <input type="text" class="form-control" id="txtCargo2" name="txtCargo2" value="{{ old('txtCargo2')}}" placeholder="Empacotador de exemplos">
                </div> 
                <div class="form-group">
                    <label for="txtAtividadesRealizadas2">Atividades realizadas</label>
                    <textarea style="resize: none;" class="form-control" id="txtAtividadesRealizadas2" value="{{ old('txtAtividadesRealizadas2')}}" name="txtAtividadesRealizadas2" rows="4"></textarea>
                </div>

                <!-- Empresa 3 -->
                <div class="form-group">
                    <label for="txtNomeEmpresa3" class="col-form-label">Nome da empresa 3</label>
                    <input type="text" class="form-control" id="txtNomeEmpresa3" name="txtNomeEmpresa3" value="{{ old('txtNomeEmpresa3')}}" placeholder="Empresa Exemplo Exemplista">
                </div>        
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="txtDataAdmissao3" class="col-form-label">Data de admissão</label>
                        <input type="text" class="form-control" id="txtDataAdmissao3" name="txtDataAdmissao3" value="{{ old('txtDataAdmissao3')}}" placeholder="DD/MM/AAAA" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="txtDataSaida3" class="col-form-label">Data de saída</label>
                        <input type="text" class="form-control" id="txtDataSaida3" name="txtDataSaida3" value="{{ old('txtDataSaida3')}}" placeholder="DD/MM/AAAA" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="txtCargo3" class="col-form-label">Cargo</label>
                    <input type="text" class="form-control" id="txtCargo3" name="txtCargo3" value="{{ old('txtCargo3')}}" placeholder="Empacotador de exemplos">
                </div>  
                <div class="form-group">
                    <label for="txtAtividadesRealizadas3">Atividades realizadas</label>
                    <textarea style="resize: none;" class="form-control" id="txtAtividadesRealizadas3" value="{{ old('txtAtividadesRealizadas3')}}" name="txtAtividadesRealizadas3" rows="4"></textarea>
                </div>
            

            </div> 
        </fieldset>
        <div class="form-row espacamento-botao-submit">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Cadastrar</button>
        </div>
    </form>
@endsection
@section('scriptCustom')
    <script src="{{asset('js/cadastroCandidato-custom.js')}}"></script>
    <script src="{{asset('js/jquery.mask.min.js')}}"></script>
@endsection