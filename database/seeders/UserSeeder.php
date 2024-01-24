<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->command->info("UserSeeder: Running Seeder");

        $this->command->info("****** Create admin user ******");

        $user['name'] = $this->command->ask("Admin name", "Admin");
        $user["email"] = $this->command->ask("Admin email", "admin@email.com");
        $password = $this->command->ask("Password", "password");

        $user['password'] = Hash::make($password);

        $admin = User::create($user);

        $admin->assignRole('admin');

        $this->command->info('UserSeeder: Admin user created successfully');

        $this->command->info('****** Create normal user ******');

        $user['name'] = $this->command->ask("User name", "User");
        $user["email"] = $this->command->ask("User email", "user@email.com");
        $user["password"] = Hash::make($password);

        $normalUser = User::create($user);

        $normalUser->assignRole("user");

        $this->command->info("UserSeeder: Normal user created successfully with password: $password");

        $this->command->info("UserSeeder: Seeder finished");
    }
}
