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
    public function conditions()
    {
        return $this->belongsToMany(Condition::class, 'condition_speciality', 'speciality_id', 'condition_id', 'id', 'id')->withTimestamps();
    }
    public function faqs()
    {
        return $this->belongsToMany(FAQ::class, 'faq_speciality', 'speciality_id', 'faq_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function blogs()
    {
        return $this->belongsToMany(Blog::class, 'blog_speciality', 'speciality_id', 'blog_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function media()
    {
        return $this->belongsToMany(Media::class, 'media_speciality', 'speciality_id', 'media_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function testimonials()
    {
        return $this->belongsToMany(Testimonial::class, 'speciality_testimonial', 'speciality_id', 'testimonial_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }
}
