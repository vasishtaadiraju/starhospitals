<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class APIController extends Controller
{
    public function createUser() {
        if (!DB::table('role_user')->where('user_id', 13)->exists()) {
            DB::table('role_user')->insert([
                'user_id' => 13,
                'role_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
