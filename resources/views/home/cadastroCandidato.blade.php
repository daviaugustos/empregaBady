@extends('layouts.menu-assets')

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
    <form method="POST" action="{{ route('salvarEmpresaPost') }}">
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
                    <input type="password" class="form-control" id="txtSenha" name="password" placeholder="Digite sua senha" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="txtConfirmacaoSenha" class="col-form-label">Confirmação de senha</label>
                    <input type="password" class="form-control" id="txtConfirmacaoSenha" name="password_confirmation" placeholder="Repita a senha" required>
                </div>
            </div>
        </fieldset>
        <fieldset class="form-group">
            <legend>Dados pessoais</legend>
            <div class="form-group">
                <label for="txtNome" class="col-form-label">Nome</label>
                <input type="text" class="form-control" id="txtNome" name="txtNome" placeholder="Nome completo">
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="txtCpf" class="col-form-label">CPF</label>
                    <input type="text" class="form-control" id="txtCpf" name="txtCpf" placeholder="Informe seu CPF">            
                </div>
                <div class="form-group col-md-4">
                    <label class="col-form-label" for="sltSexo">Sexo</label>
                    <select class="form-control" id="sltSexo" name="sltSexo">
                        <option value="DEFAULT">Selecione o sexo</optionV>
                        <option value="FEMININO">Feminino</option>
                        <option value="MASCULINO">Masculino</option>
                        <option value="OUTRO">Outro</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="txtDataNascimento" class="col-form-label">Data de nascimento</label>
                    <input type="text" class="form-control" id="txtDataNascimento" name="txtDataNascimento" placeholder="DD/MM/AAAA" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for="txtRg" class="col-form-label">RG</label>
                    <input type="text" class="form-control" id="txtRg" name="txtRg" placeholder="Informe seu RG" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="txtDataExpedicao" class="col-form-label">Data de expedição</label>
                    <input type="text" class="form-control" id="txtDataExpedicao" name="txtDataExpedicao" placeholder="Referente ao RG" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="txtTelefone" class="col-form-label">Telefone</label>
                    <input type="text" class="form-control" id="txtTelefone" name="txtTelefone" placeholder="(99) 99999-9999" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="txtCelular" class="col-form-label">Celular</label>
                    <input type="text" class="form-control" id="txtCelular" name="txtCelular" placeholder="(99) 99999-9999" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="txtNomePai" class="col-form-label">Nome do pai</label>
                    <input type="text" class="form-control" id="txtNomePai" name="txtNomePai" placeholder="Nome completo" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="txtNomeMae" class="col-form-label">Nome da mãe</label>
                    <input type="text" class="form-control" id="txtNomeMae" name="txtNomeMae" placeholder="Nome completo" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label class="col-form-label" for="sltEstadoCivil">Estado civil</label>
                    <select class="form-control" id="sltEstadoCivil" name="sltEstadoCivil">
                        <option value="DEFAULT" selected="selected">Selecione o estado civil</option>
                        <option value="CASADO">Casado</option>
                        <option value="SOLTEIRO">Solteiro</option>
                        <option value="DIVORCIADO">Divorciado</option>
                        <option value="DESQUITADO">Desquitado</option>
                        <option value="CONCUBINATO">Concubinato</option>
                        <option value="VIUVO">Viúvo</option>
                        <option value="UNIAO_ESTAVEL">União estável</option>
                        <option value="OUTROS">Outros</option>
                    </select>
                </div>  
            </div>
            <div class="form-group">
                <label for="txtQuantidadeFilhos" class="col-form-label">Quantidade de filhos</label>
                <input type="number" class="form-control" id="txtQuantidadeFilhos" name="txtQuantidadeFilhos" placeholder="2">
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="txtEnderecoCep" class="col-form-label">CEP</label>
                    <input type="text" class="form-control" id="txtEnderecoCep" name="txtEnderecoCep" placeholder="XXXXX-XX">            
                </div>
                <div class="form-group col-md-3">
                    <label class="col-form-label" for="sltEnderecoEstado">Estado</label>
                    <select class="form-control" id="sltEnderecoEstado" name="sltEnderecoEstado">
                        <option value="" selected="selected">Selecione o estado</option>
                        <option value="1">São Paulo</option>
                    </select> 
                </div>
                <div class="form-group col-md-6">
                    <label class="col-form-label" for="sltEnderecoCidade">Cidade</label>
                    <select class="form-control" id="sltEnderecoCidade" name="sltEnderecoCidade">
                        <option value="" selected="selected">Selecione a cidade</option>
                        <option value="1">Bady Bassitt</option>
                    </select> 
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="txtEnderecoLogradouro" class="col-form-label">Logradouro</label>
                    <input type="text" class="form-control" id="txtEnderecoLogradouro" name="txtEnderecoLogradouro" placeholder="Rua da colina dos exemplos" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="txtEnderecoBairro" class="col-form-label">Bairro</label>
                    <input type="text" class="form-control" id="txtEnderecoBairro" name="txtEnderecoBairro" placeholder="Bairro dos exemplos" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="txtEnderecoNumero" class="col-form-label">Número</label>
                    <input type="text" class="form-control" id="txtEnderecoNumero" name="txtEnderecoNumero" placeholder="9999" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="txtEnderecoComplemento" class="col-form-label">Complemento</label>
                    <input type="text" class="form-control" id="txtEnderecoComplemento" name="txtEnderecoComplemento" placeholder="Casa" required>
                </div>
            </div>
        </fieldset>
        <fieldset class="form-group">
            <legend>Dados profissionais</legend>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label class="col-form-label" for="sltEscolaridade">Escolaridade</label>
                    <select class="form-control" id="sltEscolaridade" name="sltEscolaridade">
                        <option>Selecione a escolaridade</option>
                        <option value="ANALFABETO">Analfabeto</option>
                        <option value="FUNDAMENTAL_INCOMPLETO">Fundamental Incompleto</option>
                        <option value="FUNDAMENTAL_COMPLETO">Fundamental Completo</option>
                        <option value="MEDIO_INCOMPLETO">Médio Incompleto</option>
                        <option value="MEDIO_COMPLETO">Médio Completo</option>
                        <option value="SUPERIOR_INCOMPLETO">Superior Incompleto</option>
                        <option value="SUPERIO_COMPLETO">Superior Completo</option>
                        <option value="ESPECIALIZACAO">Especialização</option>
                        <option value="MESTRADO">Mestrado</option>
                        <option value="DOUTORADO">Doutorado</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="txtCnhCategorias" class="col-form-label">Categorias CNH</label>
                    <input type="text" class="form-control" id="txtCnhCategorias" name="txtCnhCategorias" placeholder="A B" required>
                </div>
            </div>
            <div class="form-group">
                <label for="txtCursos">Cursos</label>
                <textarea style="resize: none;" class="form-control" id="txtCursos" name="txtCursos" rows="4"></textarea>
            </div>
            <div class="form-group">
                <label for="txtCargoPretendido1" class="col-form-label">Cargo pretendido 1ª opção</label>
                <input type="text" class="form-control" id="txtCargoPretendido1" name="txtCargoPretendido1" placeholder="Empacotador de exemplos">
            </div>  
            <div class="form-group">
                <label for="txtCargoPretendido2" class="col-form-label">Cargo pretendido 2ª opção</label>
                <input type="text" class="form-control" id="txtCargoPretendido2" name="txtCargoPretendido2" placeholder="Exemplo de empacotador">
            </div>  
            <div class="form-group">
                <label for="txtCargoPretendido3" class="col-form-label">Cargo pretendido 3ª opção</label>
                <input type="text" class="form-control" id="txtCargoPretendido3" name="txtCargoPretendido3" placeholder="Exemplista empacotante">
            </div>
        </fieldset>
        <fieldset class="form-group">
            <legend>Histórico profissional</legend>
            <!-- Empresa 1 -->
            <div class="form-group">
                <label for="txtNomeEmpresa1" class="col-form-label">Nome da empresa 1</label>
                <input type="text" class="form-control" id="txtNomeEmpresa1" name="txtNomeEmpresa1" placeholder="Empresa Exemplo Exemplista">
            </div>        
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="txtDataAdmissao1" class="col-form-label">Data de admissão</label>
                    <input type="text" class="form-control" id="txtDataAdmissao1" name="txtDataAdmissao1" placeholder="DD/MM/AAAA" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="txtDataSaida1" class="col-form-label">Data de saída</label>
                    <input type="text" class="form-control" id="txtDataSaida1" name="txtDataSaida1" placeholder="DD/MM/AAAA" required>
                </div>
            </div>
            <div class="form-group">
                <label for="txtCargo1" class="col-form-label">Cargo</label>
                <input type="text" class="form-control" id="txtCargo1" name="txtCargo1" placeholder="Empacotador de exemplos">
            </div> 
            <div class="form-group">
                <label for="txtAtividadesRealizadas1">Atividades realizadas</label>
                <textarea style="resize: none;" class="form-control" id="txtAtividadesRealizadas1" name="txtAtividadesRealizadas1" rows="4"></textarea>
            </div>

            <!-- Empresa 2 -->
            <div class="form-group">
                <label for="txtNomeEmpresa2" class="col-form-label">Nome da empresa 2</label>
                <input type="text" class="form-control" id="txtNomeEmpresa2" name="txtNomeEmpresa2" placeholder="Empresa Exemplo Exemplista">
            </div>        
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="txtDataEmissao2" class="col-form-label">Data de admissão</label>
                    <input type="text" class="form-control" id="txtDataEmissao2" name="txtDataEmissao2" placeholder="DD/MM/AAAA" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="txtDataSaida2" class="col-form-label">Data de saída</label>
                    <input type="text" class="form-control" id="txtDataSaida2" name="txtDataSaida2" placeholder="DD/MM/AAAA" required>
                </div>
            </div>
            <div class="form-group">
                <label for="txtCargo2" class="col-form-label">Cargo</label>
                <input type="text" class="form-control" id="txtCargo2" name="txtCargo2" placeholder="Empacotador de exemplos">
            </div> 
            <div class="form-group">
                <label for="txtAtividadesRealizadas2">Atividades realizadas</label>
                <textarea style="resize: none;" class="form-control" id="txtAtividadesRealizadas2" name="txtAtividadesRealizadas2" rows="4"></textarea>
            </div>

            <!-- Empresa 3 -->
            <div class="form-group">
                <label for="txtNomeEmpresa3" class="col-form-label">Nome da empresa 3</label>
                <input type="text" class="form-control" id="txtNomeEmpresa3" name="txtNomeEmpresa3" placeholder="Empresa Exemplo Exemplista">
            </div>        
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="txtDataEmissao3" class="col-form-label">Data de admissão</label>
                    <input type="text" class="form-control" id="txtDataEmissao3" name="txtDataEmissao3" placeholder="DD/MM/AAAA" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="txtDataSaida3" class="col-form-label">Data de saída</label>
                    <input type="text" class="form-control" id="txtDataSaida3" name="txtDataSaida3" placeholder="DD/MM/AAAA" required>
                </div>
            </div>
            <div class="form-group">
                <label for="txtCargo3" class="col-form-label">Cargo</label>
                <input type="text" class="form-control" id="txtCargo3" name="txtCargo3" placeholder="Empacotador de exemplos">
            </div>  
            <div class="form-group">
                <label for="txtAtividadesRealizadas3">Atividades realizadas</label>
                <textarea style="resize: none;" class="form-control" id="txtAtividadesRealizadas3" name="txtAtividadesRealizadas3" rows="4"></textarea>
            </div>
            
        </fieldset>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
@endsection