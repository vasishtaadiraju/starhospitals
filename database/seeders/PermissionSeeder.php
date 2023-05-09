<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'view user']);
        Permission::create(['name' => 'create user']);
        Permission::create(['name' => 'edit user']);
        Permission::create(['name' => 'delete user']);
        Permission::create(['name' => 'restore user']);
        Permission::create(['name' => 'force delete user']);

        Permission::create(['name' => 'view region']);
        Permission::create(['name' => 'create region']);
        Permission::create(['name' => 'edit region']);
        Permission::create(['name' => 'delete region']);
        Permission::create(['name' => 'restore region']);
        Permission::create(['name' => 'force delete region']);

        Permission::create(['name' => 'view branch']);
        Permission::create(['name' => 'create branch']);
        Permission::create(['name' => 'edit branch']);
        Permission::create(['name' => 'delete branch']);
        Permission::create(['name' => 'restore branch']);
        Permission::create(['name' => 'force delete branch']);

        Permission::create(['name' => 'view coe']);
        Permission::create(['name' => 'create coe']);
        Permission::create(['name' => 'edit coe']);
        Permission::create(['name' => 'delete coe']);
        Permission::create(['name' => 'restore coe']);
        Permission::create(['name' => 'force delete coe']);

        Permission::create(['name' => 'view speciality']);
        Permission::create(['name' => 'create speciality']);
        Permission::create(['name' => 'edit speciality']);
        Permission::create(['name' => 'delete speciality']);
        Permission::create(['name' => 'restore speciality']);
        Permission::create(['name' => 'force delete speciality']);

        Permission::create(['name' => 'view blog']);
        Permission::create(['name' => 'create blog']);
        Permission::create(['name' => 'edit blog']);
        Permission::create(['name' => 'delete blog']);
        Permission::create(['name' => 'restore blog']);
        Permission::create(['name' => 'force delete blog']);

        Permission::create(['name' => 'view media']);
        Permission::create(['name' => 'create media']);
        Permission::create(['name' => 'edit media']);
        Permission::create(['name' => 'delete media']);
        Permission::create(['name' => 'restore media']);
        Permission::create(['name' => 'force delete media']);

        Permission::create(['name' => 'view testimonial']);
        Permission::create(['name' => 'create testimonial']);
        Permission::create(['name' => 'edit testimonial']);
        Permission::create(['name' => 'delete testimonial']);
        Permission::create(['name' => 'restore testimonial']);
        Permission::create(['name' => 'force delete testimonial']);
    }
}
