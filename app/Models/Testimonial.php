<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Nova\Actions\Actionable;

class Testimonial extends Model
{
    use HasFactory, SoftDeletes, Actionable;

    protected $table = 'testimonials';

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class, 'doctor_testimonial', 'testimonial_id', 'doctor_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function branches()
    {
        return $this->belongsToMany(Branch::class, 'branch_testimonial', 'testimonial_id', 'branch_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function coes()
    {
        return $this->belongsToMany(User::class, 'coe_testimonial', 'testimonial_id', 'coe_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function specialities()
    {
        return $this->belongsToMany(Speciality::class, 'speciality_testimonial', 'testimonial_id', 'speciality_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function specialists()
    {
        return $this->belongsToMany(Specialist::class, 'specialist_testimonial', 'specialist_id', 'testimonial_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }
}
