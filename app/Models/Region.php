<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
 

class Region extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'regions';

    public function branch()
    {
        return $this->hasMany(Branch::class, 'region_id', 'id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'region_user', 'region_id', 'user_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function coes()
    {
        return $this->belongsToMany(CentreOfExcellence::class, 'coe_region', 'region_id', 'coe_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function specialities()
    {
        return $this->belongsToMany(Speciality::class, 'region_speciality', 'region_id', 'speciality_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }
}
