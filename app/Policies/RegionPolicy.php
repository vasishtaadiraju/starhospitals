<?php

namespace App\Policies;

use App\Models\Permission;
use App\Models\Region;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\DB;

class RegionPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        $role_ids = DB::table('role_user')->where('user_id', $user->id)->pluck('role_id');

        $permission_id = Permission::where('name', 'view region')->pluck('id')->first();

        $allow = false;

        foreach ($role_ids as $role_id) {
            if (DB::table('permission_role')->where('role_id', $role_id)->where('permission_id', $permission_id)->exists()) {
                $allow = true;
            }
        }

        return $allow;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Region $region): bool
    {
        $role_ids = DB::table('role_user')->where('user_id', $user->id)->pluck('role_id');

        $permission_id = Permission::where('name', 'view region')->pluck('id')->first();

        $allow = false;

        foreach ($role_ids as $role_id) {
            if (DB::table('permission_role')->where('role_id', $role_id)->where('permission_id', $permission_id)->exists()) {
                $allow = true;

                if ($role_id === 2) {
                    $allow = DB::table('branch_region')->where('branch_id', $user->branch_id)->where('region_id', $region->id)->exists();
                }
            }
        }

        return $allow;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        $role_ids = DB::table('role_user')->where('user_id', $user->id)->pluck('role_id');

        $permission_id = Permission::where('name', 'create region')->pluck('id')->first();

        $allow = false;

        foreach ($role_ids as $role_id) {
            if (DB::table('permission_role')->where('role_id', $role_id)->where('permission_id', $permission_id)->exists()) {
                $allow = true;
            }
        }

        return $allow;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Region $region): bool
    {
        $role_ids = DB::table('role_user')->where('user_id', $user->id)->pluck('role_id');

        $permission_id = Permission::where('name', 'update region')->pluck('id')->first();

        $allow = false;

        foreach ($role_ids as $role_id) {
            if (DB::table('permission_role')->where('role_id', $role_id)->where('permission_id', $permission_id)->exists()) {
                $allow = true;

                if ($role_id === 2) {
                    $allow = DB::table('branch_region')->where('branch_id', $user->branch_id)->where('region_id', $region->id)->exists();
                }
            }
        }

        return $allow;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Region $region): bool
    {
        $role_ids = DB::table('role_user')->where('user_id', $user->id)->pluck('role_id');

        $permission_id = Permission::where('name', 'delete region')->pluck('id')->first();

        $allow = false;

        foreach ($role_ids as $role_id) {
            if (DB::table('permission_role')->where('role_id', $role_id)->where('permission_id', $permission_id)->exists()) {
                $allow = true;

                if ($role_id === 2) {
                    $allow = DB::table('branch_region')->where('branch_id', $user->branch_id)->where('region_id', $region->id)->exists();
                }
            }
        }

        return $allow;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Region $region): bool
    {
        $role_ids = DB::table('role_user')->where('user_id', $user->id)->pluck('role_id');

        $permission_id = Permission::where('name', 'restore region')->pluck('id')->first();

        $allow = false;

        foreach ($role_ids as $role_id) {
            if (DB::table('permission_role')->where('role_id', $role_id)->where('permission_id', $permission_id)->exists()) {
                $allow = true;

                if ($role_id === 2) {
                    $allow = DB::table('branch_region')->where('branch_id', $user->branch_id)->where('region_id', $region->id)->exists();
                }
            }
        }

        return $allow;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Region $region): bool
    {
        $role_ids = DB::table('role_user')->where('user_id', $user->id)->pluck('role_id');

        $permission_id = Permission::where('name', 'force delete region')->pluck('id')->first();

        $allow = false;

        foreach ($role_ids as $role_id) {
            if (DB::table('permission_role')->where('role_id', $role_id)->where('permission_id', $permission_id)->exists()) {
                $allow = true;

                if ($role_id === 2) {
                    $allow = DB::table('branch_region')->where('branch_id', $user->branch_id)->where('region_id', $region->id)->exists();
                }
            }
        }

        return $allow;
    }
}
