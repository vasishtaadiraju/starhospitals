<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    public function coes()
    {
        return $this->belongsToMany(CentreOfExcellence::class, 'coe_user', 'user_id', 'coe_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function branches()
    {
        return $this->belongsToMany(Branch::class, 'branch_user', 'user_id', 'branch_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }
}
