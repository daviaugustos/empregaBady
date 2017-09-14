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
        <div class="form-group">
            <label for="txtNome" class="col-form-label">Nome</label>
            <input type="text" class="form-control" id="txtNome" name="txtNome" placeholder="Nome completo">
        </div>
        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="txtCpf" class="col-form-label">CPF</label>
                <input type="text" class="form-control" id="txtCpf" name="txtCpf" placeholder="Informe seu CPF">            </div>
            <div class="form-group col-md-4">
                <label class="col-form-label" for="sltSexo">Sexo</label>
                <select class="form-control" id="sltSexo" name="sltSexo">
                    <option>Selecione o sexo</option>
                    <option>Feminino</option>
                    <option>Masculino</option>
                    <option>Outro</option>
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
        {{--  <div class="form-group">
            <label for="inputAddress2" class="col-form-label">Address 2</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputCity" class="col-form-label">City</label>
            <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-4">
            <label for="inputState" class="col-form-label">State</label>
            <select id="inputState" class="form-control">Choose</select>
            </div>
            <div class="form-group col-md-2">
            <label for="inputZip" class="col-form-label">Zip</label>
            <input type="text" class="form-control" id="inputZip">
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Check me out
            </label>
            </div>
        </div>  --}}
        <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
@endsection