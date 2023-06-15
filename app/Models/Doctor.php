<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'doctors';

    public function coes()
    {
        return $this->belongsToMany(CentreOfExcellence::class, 'coe_doctor', 'doctor_id', 'coe_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function branches()
    {
        return $this->belongsToMany(Branch::class, 'branch_doctor', 'doctor_id', 'branch_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }


    public function blogs()
    {
        return $this->belongsToMany(Blog::class, 'blog_doctor', 'doctor_id', 'blog_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function media()
    {
        return $this->belongsToMany(Media::class, 'doctor_media', 'doctor_id', 'media_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function testimonials()
    {
        return $this->belongsToMany(Testimonial::class, 'doctor_testimonial', 'doctor_id', 'testimonial_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }
    public function specialities()
    {
        return $this->belongsToMany(Speciality::class, 'doctor_speciality', 'doctor_id', 'speciality_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }
}
