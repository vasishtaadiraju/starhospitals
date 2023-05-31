<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Nova\Actions\Actionable;

class Blog extends Model
{
    use HasFactory, SoftDeletes, Actionable;

    protected $table = 'blogs';

    protected $casts = [
        'published_date' => 'date'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'blog_user', 'blog_id', 'user_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function regions()
    {
        return $this->belongsToMany(Region::class, 'blog_region', 'blog_id', 'region_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function branches()
    {
        return $this->belongsToMany(Branch::class, 'blog_branch', 'blog_id', 'branch_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function coes()
    {
        return $this->belongsToMany(User::class, 'blog_coe', 'blog_id', 'coe_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function specialities()
    {
        return $this->belongsToMany(Speciality::class, 'blog_speciality', 'blog_id', 'speciality_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }
}
