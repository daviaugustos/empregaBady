<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\User;

class VagasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $idEmpresa = DB::table('empresas')->insert([
            'razaoSocial' => 'Empresa Teste LTDA.',
            'cnpj' => '99.999.999/8888-77',
            'nomeFantasia' => 'Testers Companie :)',
            'inscricaoMunicipal' => '44444.55555',
            'inscricaoEstadual' => '55555.22222',
            'descricao' => 'Empresa voltada para o desenvolvimento de softwares de testes. Empresa voltada para o desenvolvimento de softwares de testes.. Empresa voltada para o desenvolvimento de softwares de testes. Empresa voltada para o desenvolvimento de softwares de testes',
        ]);

        $user = User::create([
            'email'             => 'empresa@mail.com',
            'password'          => '123qweasd',
            'name'              => 'Empresa Teste',
            'telefone'          => '(17) 3258-3882',
            'celular'           => '(17) 99149-0943',
            'enderecoCidade'    => '1',
            'enderecoEstado'    => '1',
            'contactable_id'    => $idEmpresa,
            'contactable_type'  => 'App\Empresa',
        ]);
        $user->assignRole('Empresa');
        
        DB::table('vagas')->insert([
            'idEmpresa'         => $user->id,
            'cargo'             => 'Empacotador de produtos',
            'quantidadeVagas'   => 1,
            'salario'           => 'R$ 937,00',
            'beneficios'        => 'R$ 937,00',
            'local'             => 'Rua do teste, 250, Colina do Teste',
            'diaSemana'         => 'SEG - SEX',
            'horario'           => '8h-18h com 2h de almoço',
            'faixaEtaria'       => 'maior de 15',
            'sexo'              => 'Indiferente',
            'tipo'              => 'CLT',
            'cnhExigida'        => 'A',
            'descricao'         => 'Empacota, embala, ensaca e encaixota mercadorias. Presta apoio ao trabalho aos demais funcionários levando e trazendo produtos da loja, checando pesos, preços e códigos, levando e trazendo documentos, objetos. Faz atendimento direto aos clientes. ',
            'status'            => 'ABERTA',
            'created_at'        => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'        => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
