<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Specialist extends Model
{
    use HasFactory,  SoftDeletes;

    protected $table = 'specialists';

    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id', 'id');
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id', 'id');
    }

    public function speciality()
    {
        return $this->belongsTo(Speciality::class, 'speciality_id', 'id');
    }

    public function faqs()
    {
        return $this->belongsToMany(FAQ::class, 'faq_specialist', 'specialist_id', 'faq_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function testimonials()
    {
        return $this->belongsToMany(Testimonial::class, 'specialist_testimonial', 'specialist_id', 'testimonial_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }
}
