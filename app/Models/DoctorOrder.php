<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Nova\Actions\Actionable;

class DoctorOrder extends Model
{
    use HasFactory, Actionable;

    protected $table = 'doctor_orders';

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id', 'id');
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id', 'id');
    }

    public function coe()
    {
        return $this->belongsTo(CentreOfExcellence::class, 'coe_id', 'id');
    }

    public function speciality()
    {
        return $this->belongsTo(Speciality::class, 'speciality_id', 'id');
    }
}
