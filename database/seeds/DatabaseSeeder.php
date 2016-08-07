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
        // create all roles
        $role = new App\Role;
        $role = App\Role::insert([
            ['name' => 'superadmin'],
            ['name' => 'admin'],
            ['name' => 'guest'],
        ]);
        // end create all roles

        // create all permission
        $permission = new App\Permission;
        $permission = App\Permission::insert([
            ['name' => 'read_data'],
            ['name' => 'create_data'],
            ['name' => 'edit_data'],
            ['name' => 'delete_data'],
            ['name' => 'read_admin'],
            ['name' => 'create_admin'],
            ['name' => 'edit_admin'],
            ['name' => 'delete_admin'],
        ]);

        $role = App\Role::where('name','superadmin')->first();
        $role->givePermissionTo('read_data');
        $role->givePermissionTo('create_data');
        $role->givePermissionTo('edit_data');
        $role->givePermissionTo('delete_data');
        $role->givePermissionTo('read_admin');
        $role->givePermissionTo('create_admin');
        $role->givePermissionTo('edit_admin');
        $role->givePermissionTo('delete_admin');

        $role = App\Role::where('name','admin')->first();
        $role->givePermissionTo('read_data');
        $role->givePermissionTo('create_data');
        $role->givePermissionTo('read_admin');
        $role->givePermissionTo('create_admin');

        $role = App\Role::where('name','guest')->first();
        $role->givePermissionTo('read_data');



         // Create a user, and give roles
         $user = App\User::create([
             'email' => 'admin@example.com',
             'password' => bcrypt('anything_you_want'),
         ]);
         $user->assignRole('superadmin');
    }
}
