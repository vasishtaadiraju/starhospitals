<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
 

class Branch extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'branches';

    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id', 'id');
    }

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class, 'branch_doctor', 'branch_id', 'doctor_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function coes()
    {
        return $this->belongsToMany(CentreOfExcellence::class, 'branch_coe', 'branch_id', 'coe_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }
    

    public function specialities()
    {
        return $this->belongsToMany(Speciality::class, 'branch_speciality', 'branch_id', 'speciality_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function faqs()
    {
        return $this->belongsToMany(FAQ::class, 'branch_faq', 'branch_id', 'faq_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function blogs()
    {
        return $this->belongsToMany(Blog::class, 'blog_branch', 'branch_id', 'blog_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function media()
    {
        return $this->belongsToMany(Media::class, 'branch_media', 'branch_id', 'media_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function testimonials()
    {
        return $this->belongsToMany(Testimonial::class, 'branch_testimonial', 'branch_id', 'testimonial_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function specialists()
    {
        return $this->hasMany(Specialist::class, 'branch_id', 'id');
    }
}
