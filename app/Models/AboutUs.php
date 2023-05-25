<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Nova\Actions\Actionable;

class AboutUs extends Model
{
    use HasFactory, Actionable;

    protected $table = 'about_us';
}
