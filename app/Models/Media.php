<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Nova\Actions\Actionable;

class Media extends Model
{
    use HasFactory, SoftDeletes, Actionable;

    protected $table = 'media';

    protected $casts = [
        'published_date' => 'date'
    ];

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class, 'doctor_media', 'media_id', 'doctor_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
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

    public function specialists()
    {
        return $this->belongsToMany(Specialist::class, 'media_specialist', 'specialist_id', 'media_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }
}
