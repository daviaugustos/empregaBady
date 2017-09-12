<?php

Route::get('/', 'HomeController@indexView')
    ->name('home');

Route::get('/vagas', 'HomeController@vagasView')
    ->name('vagasView');

Route::get('/empresa/cadastro', 'HomeController@cadastroEmpresaView')
    ->name('cadastroEmpresaView');

// Route::post('/empresa/salvar-cadastro', 'HomeController@salvarEmpresa');

Route::get('/candidato/cadastro', 'HomeController@cadastroCandidatoView')
    ->name('cadastroCandidatoView');

// Route::post('/candidato/salvar-cadastro', 'HomeController@salvarCandidato');

Route::get('/empresa/entrar', 'HomeController@empresaLoginView')
    ->name('/empresaLoginView');

// Route::post('/empresa/login', 'HomeController@empresaLogin');

Route::get('/candidato/entrar', 'HomeController@candidatoLoginView')
    ->name('candidatoLoginView');

// Route::post('/candidato/login', 'HomeController@candidatoLogin');

// Route::get('/empresa/vagas', 'EmpresaController@vagasView');

// Route::get('/empresa/vagas/cadastrar', 'EmpresaController@cadastrarVagaView');

// Route::post('/empresa/vagas/salvar', 'EmpresaController@salvarVaga');

// Route::post('/empresa/vagas/{id-da-vaga}/fechar', 'EmpresaController@fecharVaga');

// Route::get('/empresa/vagas/{id-da-vaga}/candidatos', 'EmpresaController@vagaCandidatosView');

// Route::get('/empresa/vagas/{id-da-vaga}/candidato/{id-do-candidato}', 'EmpresaController@visualizarCandidatoView');

// Route::get('/empresa/vagas/{id-da-vaga}/candidato/{id-do-candidato}/curriculo', 'EmpresaController@getCurriculoCandidato');

// Route::get('/empresa/dados', 'EmpresaController@dadosView');

// Route:post('/empresa/salvar-dados', 'EmpresaController@salvarUpdateDados');

// Route::get('/candidato/meus-interesses','CandidatoController@meusInteressesView');

// Route::post('/candidato/{id-do-interesse}/cancelar-interesse', 'CandidatoController@cancelarInteresse');

// Route::post('/candidato/{id-da-vaga}/manisfestar-interesse', 'CandidatoController@registrarInteresse');

// Route::get('/candidato/dados', 'CandidatoController@dadosView');

// Route::post('/candidato/salvar-dados', 'CandidatoController@salvarUpdateDados');

// Route::get('/candidato/qualificacoes', 'CandidatoController@qualificacoesView');

