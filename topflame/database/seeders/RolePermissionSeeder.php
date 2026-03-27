<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            ['name' => 'Super Administrator', 'slug' => 'super-admin', 'access_level' => 100, 'is_system' => true],
            ['name' => 'Administrator', 'slug' => 'administrator', 'access_level' => 80, 'is_system' => true],
            ['name' => 'Moderator', 'slug' => 'moderator', 'access_level' => 50, 'is_system' => true],
            ['name' => 'Server Owner', 'slug' => 'server-owner', 'access_level' => 20, 'is_system' => true],
            ['name' => 'Member', 'slug' => 'member', 'access_level' => 10, 'is_system' => true],
        ];

        $permissions = [
            ['key' => 'admin.access', 'group_key' => 'admin', 'label' => 'Access Admin Panel'],
            ['key' => 'users.manage', 'group_key' => 'users', 'label' => 'Manage Users'],
            ['key' => 'roles.manage', 'group_key' => 'roles', 'label' => 'Manage Roles'],
            ['key' => 'permissions.manage', 'group_key' => 'roles', 'label' => 'Manage Permissions'],
            ['key' => 'servers.submit', 'group_key' => 'servers', 'label' => 'Submit Server'],
            ['key' => 'servers.moderate', 'group_key' => 'servers', 'label' => 'Moderate Servers'],
            ['key' => 'packages.manage', 'group_key' => 'packages', 'label' => 'Manage Packages'],
            ['key' => 'settings.manage', 'group_key' => 'settings', 'label' => 'Manage Settings'],
        ];

        foreach ($roles as $role) {
            DB::table('roles')->updateOrInsert(
                ['slug' => $role['slug']],
                $role
            );
        }

        foreach ($permissions as $permission) {
            DB::table('permissions')->updateOrInsert(
                ['key' => $permission['key']],
                $permission
            );
        }
    }
}
