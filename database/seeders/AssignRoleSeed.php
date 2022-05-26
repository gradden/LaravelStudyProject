<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class AssignRoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminuser = User::find(4);
        $user = User::find(5);

        $adminrole = Role::where('name', '=', 'admin')->first();
        $userrole = Role::where('name', '=', 'user')->first();

        $user->assignRole($userrole);
        $adminuser->assignRole($adminrole);
    }
}
