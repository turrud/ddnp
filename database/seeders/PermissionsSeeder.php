<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // Create default permissions
        Permission::create(['name' => 'list abouts']);
        Permission::create(['name' => 'view abouts']);
        Permission::create(['name' => 'create abouts']);
        Permission::create(['name' => 'update abouts']);
        Permission::create(['name' => 'delete abouts']);

        Permission::create(['name' => 'list awards']);
        Permission::create(['name' => 'view awards']);
        Permission::create(['name' => 'create awards']);
        Permission::create(['name' => 'update awards']);
        Permission::create(['name' => 'delete awards']);

        Permission::create(['name' => 'list clients']);
        Permission::create(['name' => 'view clients']);
        Permission::create(['name' => 'create clients']);
        Permission::create(['name' => 'update clients']);
        Permission::create(['name' => 'delete clients']);

        Permission::create(['name' => 'list contacts']);
        Permission::create(['name' => 'view contacts']);
        Permission::create(['name' => 'create contacts']);
        Permission::create(['name' => 'update contacts']);
        Permission::create(['name' => 'delete contacts']);

        Permission::create(['name' => 'list homes']);
        Permission::create(['name' => 'view homes']);
        Permission::create(['name' => 'create homes']);
        Permission::create(['name' => 'update homes']);
        Permission::create(['name' => 'delete homes']);

        Permission::create(['name' => 'list methods']);
        Permission::create(['name' => 'view methods']);
        Permission::create(['name' => 'create methods']);
        Permission::create(['name' => 'update methods']);
        Permission::create(['name' => 'delete methods']);

        Permission::create(['name' => 'list partners']);
        Permission::create(['name' => 'view partners']);
        Permission::create(['name' => 'create partners']);
        Permission::create(['name' => 'update partners']);
        Permission::create(['name' => 'delete partners']);

        Permission::create(['name' => 'list proarchitecturs']);
        Permission::create(['name' => 'view proarchitecturs']);
        Permission::create(['name' => 'create proarchitecturs']);
        Permission::create(['name' => 'update proarchitecturs']);
        Permission::create(['name' => 'delete proarchitecturs']);

        Permission::create(['name' => 'list profiles']);
        Permission::create(['name' => 'view profiles']);
        Permission::create(['name' => 'create profiles']);
        Permission::create(['name' => 'update profiles']);
        Permission::create(['name' => 'delete profiles']);

        Permission::create(['name' => 'list projectinteriors']);
        Permission::create(['name' => 'view projectinteriors']);
        Permission::create(['name' => 'create projectinteriors']);
        Permission::create(['name' => 'update projectinteriors']);
        Permission::create(['name' => 'delete projectinteriors']);

        Permission::create(['name' => 'list teams']);
        Permission::create(['name' => 'view teams']);
        Permission::create(['name' => 'create teams']);
        Permission::create(['name' => 'update teams']);
        Permission::create(['name' => 'delete teams']);

        // Create user role and assign existing permissions
        $currentPermissions = Permission::all();
        $userRole = Role::create(['name' => 'user']);
        $userRole->givePermissionTo($currentPermissions);

        // Create admin exclusive permissions
        Permission::create(['name' => 'list roles']);
        Permission::create(['name' => 'view roles']);
        Permission::create(['name' => 'create roles']);
        Permission::create(['name' => 'update roles']);
        Permission::create(['name' => 'delete roles']);

        Permission::create(['name' => 'list permissions']);
        Permission::create(['name' => 'view permissions']);
        Permission::create(['name' => 'create permissions']);
        Permission::create(['name' => 'update permissions']);
        Permission::create(['name' => 'delete permissions']);

        Permission::create(['name' => 'list users']);
        Permission::create(['name' => 'view users']);
        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'update users']);
        Permission::create(['name' => 'delete users']);

        // Create admin role and assign all permissions
        $allPermissions = Permission::all();
        $adminRole = Role::create(['name' => 'super-admin']);
        $adminRole->givePermissionTo($allPermissions);

        $user = \App\Models\User::whereEmail('admin@admin.com')->first();

        if ($user) {
            $user->assignRole($adminRole);
        }
    }
}