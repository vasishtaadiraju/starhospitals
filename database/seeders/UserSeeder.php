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
        DB::table('users')->insert(
            [
                'name' => 'Swapna',
                'email' => 'swapna@denary.agency',
                'password' => Hash::make('StarHospitals@123'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Sakshee',
                'email' => 'sakshee@denary.agency',
                'password' => Hash::make('StarHospitals@123'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Vasu',
                'email' => 'bala.v@denary.agency',
                'password' => Hash::make('StarHospitals@123'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Vinay',
                'email' => 'vinay.p@denary.agency',
                'password' => Hash::make('StarHospitals@123'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Dia',
                'email' => 'diamehta.mayo@gmail.com',
                'password' => Hash::make('StarHospitals@123'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Moise',
                'email' => 'moiseofficial009@gmail.com',
                'password' => Hash::make('StarHospitals@123'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Shayani',
                'email' => 'shayani.de@starhospitals.co.in',
                'password' => Hash::make('StarHospitals@123'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Naresh',
                'email' => 'nareshreddy.c@starhospitals.co.in',
                'password' => Hash::make('StarHospitals@123'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Ashok',
                'email' => 'ashokvardhan.k@starhospitals.co.in',
                'password' => Hash::make('StarHospitals@123'),
                'created_at' => now(),
                'updated_at' => now()
            ],
        );
    }
}
