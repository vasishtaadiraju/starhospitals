<?php

namespace App\Policies;

use App\Models\CentreOfExcellence;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\DB;

class COEPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        $role_ids = DB::table('role_user')->where('user_id', $user->id)->pluck('role_id');

        $permission_id = Permission::where('name', 'view coe')->pluck('id')->first();

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
    public function view(User $user, CentreOfExcellence $centreOfExcellence): bool
    {
        $role_ids = DB::table('role_user')->where('user_id', $user->id)->pluck('role_id');

        $permission_id = Permission::where('name', 'view coe')->pluck('id')->first();

        $allow = false;

        foreach ($role_ids as $role_id) {
            if (DB::table('permission_role')->where('role_id', $role_id)->where('permission_id', $permission_id)->exists()) {
                $allow = true;
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

        $permission_id = Permission::where('name', 'create coe')->pluck('id')->first();

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
    public function update(User $user, CentreOfExcellence $centreOfExcellence): bool
    {
        $role_ids = DB::table('role_user')->where('user_id', $user->id)->pluck('role_id');

        $permission_id = Permission::where('name', 'update coe')->pluck('id')->first();

        $allow = false;

        foreach ($role_ids as $role_id) {
            if (DB::table('permission_role')->where('role_id', $role_id)->where('permission_id', $permission_id)->exists()) {
                $allow = true;

                if ($role_id === 2) {
                    $allow = DB::table('branch_coe')->where('branch_id', $user->branch_id)->where('coe_id', $centreOfExcellence->id)->exists();
                }
            }
        }

        return $allow;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, CentreOfExcellence $centreOfExcellence): bool
    {
        $role_ids = DB::table('role_user')->where('user_id', $user->id)->pluck('role_id');

        $permission_id = Permission::where('name', 'delete coe')->pluck('id')->first();

        $allow = false;

        foreach ($role_ids as $role_id) {
            if (DB::table('permission_role')->where('role_id', $role_id)->where('permission_id', $permission_id)->exists()) {
                $allow = true;

                if ($role_id === 2) {
                    $allow = DB::table('branch_coe')->where('branch_id', $user->branch_id)->where('coe_id', $centreOfExcellence->id)->exists();
                }
            }
        }

        return $allow;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, CentreOfExcellence $centreOfExcellence): bool
    {
        $role_ids = DB::table('role_user')->where('user_id', $user->id)->pluck('role_id');

        $permission_id = Permission::where('name', 'restore coe')->pluck('id')->first();

        $allow = false;

        foreach ($role_ids as $role_id) {
            if (DB::table('permission_role')->where('role_id', $role_id)->where('permission_id', $permission_id)->exists()) {
                $allow = true;

                if ($role_id === 2) {
                    $allow = DB::table('branch_coe')->where('branch_id', $user->branch_id)->where('coe_id', $centreOfExcellence->id)->exists();
                }
            }
        }

        return $allow;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, CentreOfExcellence $centreOfExcellence): bool
    {
        $role_ids = DB::table('role_user')->where('user_id', $user->id)->pluck('role_id');

        $permission_id = Permission::where('name', 'force delete coe')->pluck('id')->first();

        $allow = false;

        foreach ($role_ids as $role_id) {
            if (DB::table('permission_role')->where('role_id', $role_id)->where('permission_id', $permission_id)->exists()) {
                $allow = true;

                if ($role_id === 2) {
                    $allow = DB::table('branch_coe')->where('branch_id', $user->branch_id)->where('coe_id', $centreOfExcellence->id)->exists();
                }
            }
        }

        return $allow;
    }
}
