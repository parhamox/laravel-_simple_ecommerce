<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $superAdmin = User::create([
            'name' => 'Super Admin',
            'email' => 'SuperAdmin@example.com',+
            'password' => bcrypt('Password'),
        ]);
        $superAdmin->assignRole('SuperAdmin');

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'Admin@example.com',
            'password' => bcrypt('Password'),
        ]);
        $admin->assignRole('Admin');

        $user = User::create([
            'name' => 'User',
            'email' => 'User@example.com',
            'password' => bcrypt('Password'),
        ]);
        $user->assignRole('User');
    }
}
