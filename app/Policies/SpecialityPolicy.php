<?php

namespace App\Policies;

use App\Models\Permission;
use App\Models\Speciality;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\DB;

class SpecialityPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        $role_ids = DB::table('role_user')->where('user_id', $user->id)->pluck('role_id');

        $permission_id = Permission::where('name', 'view speciality')->pluck('id')->first();

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
    public function view(User $user, Speciality $speciality): bool
    {
        $role_ids = DB::table('role_user')->where('user_id', $user->id)->pluck('role_id');

        $permission_id = Permission::where('name', 'view speciality')->pluck('id')->first();

        $allow = false;

        foreach ($role_ids as $role_id) {
            if (DB::table('permission_role')->where('role_id', $role_id)->where('permission_id', $permission_id)->exists()) {
                $allow = true;

                if ($role_id === 2) {
                    $allow = DB::table('branch_speciality')->where('branch_id', $user->branch_id)->where('speciality_id', $speciality->id)->exists();
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

        $permission_id = Permission::where('name', 'create speciality')->pluck('id')->first();

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
    public function update(User $user, Speciality $speciality): bool
    {
        $role_ids = DB::table('role_user')->where('user_id', $user->id)->pluck('role_id');

        $permission_id = Permission::where('name', 'update speciality')->pluck('id')->first();

        $allow = false;

        foreach ($role_ids as $role_id) {
            if (DB::table('permission_role')->where('role_id', $role_id)->where('permission_id', $permission_id)->exists()) {
                $allow = true;

                if ($role_id === 2) {
                    $allow = DB::table('branch_speciality')->where('branch_id', $user->branch_id)->where('speciality_id', $speciality->id)->exists();
                }
            }
        }

        return $allow;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Speciality $speciality): bool
    {
        $role_ids = DB::table('role_user')->where('user_id', $user->id)->pluck('role_id');

        $permission_id = Permission::where('name', 'delete speciality')->pluck('id')->first();

        $allow = false;

        foreach ($role_ids as $role_id) {
            if (DB::table('permission_role')->where('role_id', $role_id)->where('permission_id', $permission_id)->exists()) {
                $allow = true;

                if ($role_id === 2) {
                    $allow = DB::table('branch_speciality')->where('branch_id', $user->branch_id)->where('speciality_id', $speciality->id)->exists();
                }
            }
        }

        return $allow;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Speciality $speciality): bool
    {
        $role_ids = DB::table('role_user')->where('user_id', $user->id)->pluck('role_id');

        $permission_id = Permission::where('name', 'restore speciality')->pluck('id')->first();

        $allow = false;

        foreach ($role_ids as $role_id) {
            if (DB::table('permission_role')->where('role_id', $role_id)->where('permission_id', $permission_id)->exists()) {
                $allow = true;

                if ($role_id === 2) {
                    $allow = DB::table('branch_speciality')->where('branch_id', $user->branch_id)->where('speciality_id', $speciality->id)->exists();
                }
            }
        }

        return $allow;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Speciality $speciality): bool
    {
        $role_ids = DB::table('role_user')->where('user_id', $user->id)->pluck('role_id');

        $permission_id = Permission::where('name', 'force delete speciality')->pluck('id')->first();

        $allow = false;

        foreach ($role_ids as $role_id) {
            if (DB::table('permission_role')->where('role_id', $role_id)->where('permission_id', $permission_id)->exists()) {
                $allow = true;

                if ($role_id === 2) {
                    $allow = DB::table('branch_speciality')->where('branch_id', $user->branch_id)->where('speciality_id', $speciality->id)->exists();
                }
            }
        }

        return $allow;
    }
}
