<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Nova\Actions\Actionable;

class Branch extends Model
{
    use HasFactory, SoftDeletes, Actionable;

    protected $table = 'branches';

    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id', 'id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'branch_user', 'branch_id', 'user_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function coes()
    {
        return $this->belongsToMany(CentreOfExcellence::class, 'branch_coe', 'branch_id', 'coe_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function specialities()
    {
        return $this->belongsToMany(Speciality::class, 'branch_speciality', 'branch_id', 'speciality_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }
}
