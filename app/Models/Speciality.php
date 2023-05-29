<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
 

class Speciality extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'specialities';

    public function users()
    {
        return $this->belongsToMany(User::class, 'speciality_user', 'speciality_id', 'user_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function regions()
    {
        return $this->belongsToMany(Region::class, 'region_speciality', 'speciality_id', 'region_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function branches()
    {
        return $this->belongsToMany(Branch::class, 'branch_speciality', 'speciality_id', 'branch_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function coes()
    {
        return $this->belongsToMany(CentreOfExcellence::class, 'coe_speciality', 'speciality_id', 'coe_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }
}
