<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            // Video Permissions
            "create_video",
            "edit_video",
            "delete_video",
            "view_video",

            // Report Permissions
            "view_report",
        ];

        foreach ($permissions as $permission) {
            $permission = Permission::firstOrCreate(["name" => $permission, "guard_name" => "web"]);
            $permission->save();
        }
    }
}
