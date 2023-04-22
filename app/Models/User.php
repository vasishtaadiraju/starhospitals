<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Nova\Actions\Actionable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes, Actionable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function regions()
    {
        return $this->belongsToMany(Region::class, 'region_user', 'user_id', 'region_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function branches()
    {
        return $this->belongsToMany(Branch::class, 'branch_user', 'user_id', 'branch_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function coes()
    {
        return $this->belongsToMany(CentreOfExcellence::class, 'coe_user', 'user_id', 'coe_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }

    public function specialities()
    {
        return $this->belongsToMany(Speciality::class, 'speciality_user', 'user_id', 'speciality_id', 'id', 'id')->withPivot('order_number')->withTimestamps();
    }
}
