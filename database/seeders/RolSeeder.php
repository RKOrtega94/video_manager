<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin role with all permissions
        Role::create([
            "name" => "admin",
            "guard_name" => "web",
        ])->givePermissionTo(Permission::all());

        Role::create([
            "name" => "user",
            "guard_name" => "web",
        ])->givePermissionTo([
            "view_video",
        ]);
    }
}
