<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class APIController extends Controller
{
    public function createUser() {
        DB::table('users')->insert([
            'name' => 'Vasishta',
            'email' => 'vasishta@outshade.com',
            'password' => Hash::make('Outshade@007'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('role_user')->insert([
            'user_id' => 11,
            'role_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }

    public function truncateBranchCOESpecialityMapping() {
        DB::table('branch_coe')->truncate();
        DB::table('branch_speciality')->truncate();
    }
}
