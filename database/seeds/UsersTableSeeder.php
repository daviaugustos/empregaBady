<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->criarAdminFull();
        $this->criarAdminVagas();
    }

    private function criarAdminFull(){
        $user = User::create([
            'name' => 'Desenvolvedor',
            'email' => 'sistemas@badybassitt.com.br',
            'password' => '123qweasd',
            'telefone' => '(17) 9999-9999',
            'celular' => '(17) 99999-9999',
            'enderecoCidade' => '1',
            'enderecoEstado' => '1',
            'contactable_id' => '0',
            'contactable_type' => 'App\Candidato',
        ]);
        $user->assignRole('AdminFull');
    }

    private function criarAdminVagas(){
        $user = User::create([
            'name' => 'Administrador de Vagas',
            'email' => 'admin@badybassitt.sp.gov.br',
            'password' => '123qweasd',
            'telefone' => '(17) 9999-9999',
            'celular' => '(17) 99999-9999',
            'enderecoCidade' => '1',
            'enderecoEstado' => '1',
            'contactable_id' => '0',
            'contactable_type' => 'App\Candidato',
        ]);
        $user->assignRole('AdminVagas');
    }
}
