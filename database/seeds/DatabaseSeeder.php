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

        // Basic roles data
    // App\Role::insert([
    //     ['name' => 'admin'],
    //     ['name' => 'manager'],
    //     ['name' => 'editor'],
    // ]);

    // Basic permissions data
    // App\Permission::insert([
    //     ['name' => 'access.backend'],
    //     ['name' => 'create.user'],
    //     ['name' => 'edit.user'],
    //     ['name' => 'delete.user'],
    //     ['name' => 'create.article'],
    //     ['name' => 'edit.article'],
    //     ['name' => 'delete.article'],
    // ]);
    //
    // // Add a permission to a role
    // $role = App\Role::where('name', 'admin')->first();
    // $role->addPermission('access.backend');
    // $role->addPermission('create.user');
    // $role->addPermission('edit.user');
    // $role->addPermission('delete.user');
    // // ... Add other role permission if necessary
    //
    // // Create a user, and give roles
    // $user = App\User::create([
    //     'email' => 'admin@example.com',
    //     'password' => bcrypt('anything_you_want'),
    // ]);
    //
    // $user->assignRole('admin');
    }
}
