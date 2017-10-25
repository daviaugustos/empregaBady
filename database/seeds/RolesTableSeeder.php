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
        $roleAdmin = Role::create(['name' => 'AdminFull']);
        $roleAdmin->givePermissionTo('Administer roles & permissions');
        $roleAdmin->givePermissionTo('Criar vaga');
        $roleAdmin->givePermissionTo('Gerenciar vagas');

        $roleCandidato = Role::create(['name' => 'Candidato']);

        $roleEmpresa = Role::create(['name' => 'Empresa']);
        $roleEmpresa->givePermissionTo('Criar vaga');
        $roleEmpresa->givePermissionTo('Gerenciar vagas');

        $roleAdminVagas = Role::create(['name' => 'AdminVagas']);
    }
}
