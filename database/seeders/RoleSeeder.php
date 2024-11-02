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
     *
     * @return void
     */
    public function run()
    {
        //
      


        $role1 = Role::create(['name'=>'Admin']);
        $role2 = Role::create(['name'=>'welcome']);
        $role3 = Role::create(['name'=>'Docente']);
        $role4 = Role::create(['name'=>'Estudiante']);

        permission::create(['name'=>'dashboard'])->syncRoles([$role1,$role2,$role3,$role4]);

        permission::create(['name'=>'users.index'])->syncRoles([$role1,$role2,$role3,$role4]);
        permission::create(['name'=>'users.edit'])->syncRoles([$role1,$role2,$role3,$role4]);
        permission::create(['name'=>'users.update'])->syncRoles([$role1,$role2,$role3,$role4]);

        permission::create(['name'=>'docente.index'])->syncRoles([$role1,$role2,$role3]);
        permission::create(['name'=>'docente.create'])->syncRoles([$role1,$role2,$role3]);
        permission::create(['name'=>'docente.edit'])->syncRoles([$role1,$role2,$role3]);
        permission::create(['name'=>'docente.destroy'])->syncRoles([$role1,$role2,$role3]);

        permission::create(['name'=>'estudiante.index'])->syncRoles([$role1,$role2,$role3]);
        permission::create(['name'=>'estudiante.create'])->syncRoles([$role1,$role2,$role3]);
        permission::create(['name'=>'estudiante.edit'])->syncRoles([$role1,$role2,$role3]);
        permission::create(['name'=>'estudiante.destroy'])->syncRoles([$role1,$role2,$role3]);

    }
}
