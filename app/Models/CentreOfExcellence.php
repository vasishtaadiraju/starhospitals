<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
 

class CentreOfExcellence extends Model
{
    use HasFactory, SoftDeletes;

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

    public function faqs()
    {
        return $this->belongsToMany(FAQ::class, 'coe_faq', 'coe_id', 'faq_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function blogs()
    {
        return $this->belongsToMany(Blog::class, 'blog_coe', 'coe_id', 'blog_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function media()
    {
        return $this->belongsToMany(Media::class, 'coe_media', 'coe_id', 'media_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function testimonials()
    {
        return $this->belongsToMany(Testimonial::class, 'coe_testimonial', 'coe_id', 'testimonial_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }
}
