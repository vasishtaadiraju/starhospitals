<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Nova\Actions\Actionable;

class Doctor extends Model
{
    use HasFactory, SoftDeletes, Actionable;

    protected $table = 'doctors';

    public function branches()
    {
        return $this->belongsToMany(Branch::class, 'branch_doctor', 'doctor_id', 'branch_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function coes()
    {
        return $this->belongsToMany(CentreOfExcellence::class, 'coe_doctor', 'doctor_id', 'coe_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function specialities()
    {
        return $this->belongsToMany(Speciality::class, 'doctor_speciality', 'doctor_id', 'speciality_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }
}
