<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        $this->call(PermissionsTableSeeder::class);
        $this->call(VagasTableSeeder::class);
        $this->call(RolesTableSeeder::class);
    }
}
