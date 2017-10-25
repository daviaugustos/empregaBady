<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->criarRoleAdminFull();
        $this->criarRoleEmpresa();
        $this->criarRoleCandidato();
        $this->criarRoleAdminVagas();
    }

    private function criarRoleAdminFull(){
        $novaRole = Role::create(['name' => 'AdminFull']);
        $novaRole->givePermissionTo('Administer roles & permissions');
        $novaRole->givePermissionTo('Criar vaga');
        $novaRole->givePermissionTo('Gerenciar vagas');
    }

    private function criarRoleCandidato(){
        $novaRole = Role::create(['name' => 'Candidato']);
    }

    private function criarRoleAdminVagas(){
        $novaRole = Role::create(['name' => 'AdminVagas']);
    }

    private function criarRoleEmpresa(){
        $novaRole = Role::create(['name' => 'Empresa']);
        $novaRole->givePermissionTo('Criar vaga');
        $novaRole->givePermissionTo('Gerenciar vagas');
    }
}
