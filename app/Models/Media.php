<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
 

class Media extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'media';

    public function users()
    {
        return $this->belongsToMany(User::class, 'media_user', 'media_id', 'user_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function regions()
    {
        return $this->belongsToMany(Region::class, 'media_region', 'media_id', 'region_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function branches()
    {
        return $this->belongsToMany(Branch::class, 'branch_media', 'media_id', 'branch_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function coes()
    {
        return $this->belongsToMany(User::class, 'coe_media', 'media_id', 'coe_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function specialities()
    {
        return $this->belongsToMany(Speciality::class, 'media_speciality', 'media_id', 'speciality_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }
}
