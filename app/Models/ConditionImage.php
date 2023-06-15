<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Nova\Actions\Actionable;

class ConditionImage extends Model
{
    use HasFactory, Actionable, SoftDeletes;

    protected $table = 'condition_images';

    public function conditions()
    {
        return $this->hasOne(Condition::class, 'condition_id', 'id');
    }
}
