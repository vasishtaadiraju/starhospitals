<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorOrder extends Model
{
    use HasFactory;

    protected $table = 'doctor_orders';

    public function doctor()
    {
        return $this->belongsTo(Doctor::class,'doctor_id', 'id');
    }
}
