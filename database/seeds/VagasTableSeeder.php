<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class VagasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vagas')->insert([
            'cargo' => 'Empacotador de produtos',
            'quantidadeVagas' => 1,
            'salario' => 'R$ 937,00',
            'beneficios' => 'R$ 937,00',
            'local' => 'Rua do teste, 250, Colina do Teste',
            'diaSemana' => 'SEG - SEX',
            'horario' => '8h-18h com 2h de almoço',
            'faixaEtaria' => 'maior de 15',
            'sexo' => 'Indiferente',
            'tipo' => 'CLT',
            'cnhExigida' => 'A',
            'descricao' => 'Empacota, embala, ensaca e encaixota mercadorias. Presta apoio ao trabalho aos demais funcionários levando e trazendo produtos da loja, checando pesos, preços e códigos, levando e trazendo documentos, objetos. Faz atendimento direto aos clientes. ',
            'status' => 'AGUARDANDO ANALISE',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
