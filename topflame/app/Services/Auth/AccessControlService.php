<?php

namespace App\Services\Auth;

use App\Models\User;

class AccessControlService
{
    public function hasPermission(?User $user, string $permissionKey): bool
    {
        if (!$user) {
            return false;
        }

        foreach ($user->roles as $role) {
            foreach ($role->permissions as $permission) {
                if ($permission->key === $permissionKey && (bool) $permission->pivot->allowed) {
                    return true;
                }
            }
        }

        return false;
    }
}
