<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Nova\Actions\Actionable;

class FAQ extends Model
{
    use HasFactory, SoftDeletes, Actionable;

    protected $table = 'faqs';

    public function branches()
    {
        return $this->belongsToMany(Branch::class, 'branch_faq', 'faq_id', 'branch_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function coes()
    {
        return $this->belongsToMany(CentreOfExcellence::class, 'coe_faq', 'faq_id', 'coe_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function specialities()
    {
        return $this->belongsToMany(Speciality::class, 'faq_speciality', 'faq_id', 'speciality_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class, 'faq_user', 'faq_id', 'user_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function conditions()
    {
        return $this->belongsToMany(Condition::class, 'condition_faq', 'faq_id', 'condition_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function specialists()
    {
        return $this->belongsToMany(Specialist::class, 'faq_specialist', 'faq_id', 'specialist_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }
}
