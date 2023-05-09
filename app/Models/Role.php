<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Nova\Actions\Actionable;

class Role extends Model
{
    use HasFactory, SoftDeletes, Actionable;

    protected $table = 'roles';

    public function users()
    {
        return $this->belongsToMany(User::class, 'role_user', 'role_id', 'user_id', 'id', 'id')->withTimestamps();
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'permission_role', 'role_id', 'permission_id', 'id', 'id')->withTimestamps();
    }
}
