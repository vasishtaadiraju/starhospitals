<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Swapna',
            'email' => 'swapna@denary.agency',
            'password' => Hash::make('StarHospitals@123'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('role_user')->insert([
            'user_id' => 2,
            'role_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Sakshee',
            'email' => 'sakshee@denary.agency',
            'password' => Hash::make('StarHospitals@123'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('role_user')->insert([
            'user_id' => 3,
            'role_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Vasu',
            'email' => 'bala.v@denary.agency',
            'password' => Hash::make('StarHospitals@123'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('role_user')->insert([
            'user_id' => 4,
            'role_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Vinay',
            'email' => 'vinay.p@denary.agency',
            'password' => Hash::make('StarHospitals@123'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('role_user')->insert([
            'user_id' => 5,
            'role_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Dia',
            'email' => 'diamehta.mayo@gmail.com',
            'password' => Hash::make('StarHospitals@123'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('role_user')->insert([
            'user_id' => 6,
            'role_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Moise',
            'email' => 'moiseofficial009@gmail.com',
            'password' => Hash::make('StarHospitals@123'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('role_user')->insert([
            'user_id' => 7,
            'role_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Shayani',
            'email' => 'shayani.de@starhospitals.co.in',
            'password' => Hash::make('StarHospitals@123'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('role_user')->insert([
            'user_id' => 8,
            'role_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Naresh',
            'email' => 'nareshreddy.c@starhospitals.co.in',
            'password' => Hash::make('StarHospitals@123'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('role_user')->insert([
            'user_id' => 9,
            'role_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Ashok',
            'email' => 'ashokvardhan.k@starhospitals.co.in',
            'password' => Hash::make('StarHospitals@123'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('role_user')->insert([
            'user_id' => 10,
            'role_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
