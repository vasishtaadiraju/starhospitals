<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Nova\Actions\Actionable;

class CentreOfExcellence extends Model
{
    use HasFactory, SoftDeletes, Actionable;

    protected $table = 'centre_of_excellences';

    public function users()
    {
        return $this->belongsToMany(User::class, 'coe_user', 'coe_id', 'user_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function regions()
    {
        return $this->belongsToMany(Region::class, 'coe_region', 'coe_id', 'region_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function branches()
    {
        return $this->belongsToMany(Branch::class, 'branch_coe', 'coe_id', 'branch_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function specialities()
    {
        return $this->belongsToMany(Speciality::class, 'coe_speciality', 'coe_id', 'speciality_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }
}
