<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name','admin')->first();
        $role_client = Role::where('name','client')->first();

        $admin = new User();
        $admin->name = 'Elodie.C';
        $admin->email = 'eloxi.compainfr@gmail.cum';
        $admin->password = bcrypt('elodiec');
        $admin->save();
        $admin->roles()->attach($role_admin);


        $client = new User();
        $client->name = 'COLPF';
        $client->email = 'anthony.boivin@tremblaye-sa.fr';
        $client->password = bcrypt('01394');
        $client->save();
        $client->roles()->attach($role_client);
    }
}
