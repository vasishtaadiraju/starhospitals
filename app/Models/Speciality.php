<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Nova\Actions\Actionable;

class Speciality extends Model
{
    use HasFactory, SoftDeletes, Actionable;

    protected $table = 'specialities';

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class, 'doctor_speciality', 'speciality_id', 'doctor_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
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
