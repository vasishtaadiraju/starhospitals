<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Condition extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'conditions';

    public function coes()
    {
        return $this->belongsToMany(CentreOfExcellence::class, 'coe_condition', 'condition_id', 'coe_id', 'id', 'id')->withTimestamps();
    }

    public function specialities()
    {
        return $this->belongsToMany(Speciality::class, 'condition_speciality', 'condition_id', 'speciality_id', 'id', 'id')->withTimestamps();
    }
}
