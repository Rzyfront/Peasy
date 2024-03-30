<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $role1 = Role::create(['name'=> 'superadmin']);
        $role2 = Role::create(['name'=> 'admin']);
        $role3 = Role::create(['name'=> 'user']);
        $role4 = Role::create(['name'=> 'client']);

        Permission::create(['name'=> 'superadmin.home']);
        Permission::create(['name'=> 'admin.home']);
        Permission::create(['name'=> 'user.home']);
        Permission::create(['name'=> 'client.home']);
        
    }
}
