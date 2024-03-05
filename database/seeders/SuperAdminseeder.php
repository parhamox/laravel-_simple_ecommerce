<?php

    namespace Database\Seeders;
    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\Hash;
    use App\Models\User; // Replace with your User model path

    class SuperAdminSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            $superAdmin = User::create([
                'name' => 'Super Admin',
                'email' => 'superadmin@superadmin.com',
                'password'=> Hash::make('123456789'),
                // Add any other relevant fields for your User model
            ]);

            // Assign Super Admin role (if using roles)
            if (method_exists($superAdmin, 'assignRole')) {
                $superAdmin->assignRole('super-admin'); // Replace 'super-admin' with your actual role name
            }
        }
    }


