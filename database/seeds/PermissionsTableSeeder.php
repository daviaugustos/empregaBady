<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'Administer roles & permissions']);
        Permission::create(['name' => 'Criar vaga']);
        Permission::create(['name' => 'Gerenciar vagas']);
    }
}
