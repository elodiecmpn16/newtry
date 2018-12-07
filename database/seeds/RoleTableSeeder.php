<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{

    public function run()
    {
        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->description = 'Role d\'administrateur';
        $role_admin->save();

        $role_client = new Role();
        $role_client->name = 'client';
        $role_client->description = 'Client';
        $role_client->save();

        $role_agent = new Role();
        $role_agent->name = 'agent';
        $role_agent->description = 'Agent';
        $role_agent->save();
    }
}
