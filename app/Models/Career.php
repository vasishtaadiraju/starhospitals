<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Nova\Actions\Actionable;

class Career extends Model
{
    use HasFactory, Actionable;

    protected $table = 'careers';
}
