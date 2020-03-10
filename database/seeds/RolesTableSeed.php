<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $roles = ['student', 'admin'];
        foreach ($roles as $role) {
            Role::create([
                'role_name' => $role
            ]);
        }
    }
}
