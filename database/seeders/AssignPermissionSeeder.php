<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssignPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = Permission::get(['id', 'name']);

        foreach ($permissions as $permission) {
            DB::table('permission_role')->insert([
                'permission_id' => $permission->id,
                'role_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            if ($permission->id !== 1) {
                DB::table('permission_role')->insert([
                    'permission_id' => $permission->id,
                    'role_id' => 2,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }

            DB::table('permission_role')->insert([
                'permission_id' => $permission->id,
                'role_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
