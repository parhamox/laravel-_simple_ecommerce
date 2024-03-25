<?php
namespace Database\Seeders;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Seeder;


class RoleAndPermissionSeeder extends Seeder
{
    public function run(): void
    {
        $superAdmin = \Spatie\Permission\Models\Role::firstOrCreate(['name' => 'SuperAdmin']);
        $admin = \Spatie\Permission\Models\Role::firstOrCreate(['name' => 'Admin']);
        $user = \Spatie\Permission\Models\Role::firstOrCreate(['name' => 'User']);

        // Assign Super Admin role and admin permissions
        $AddPruductPermission = \Spatie\Permission\Models\Permission::firstOrCreate(['name' => 'add-pruduct']);
        $EditPruductPermission = \Spatie\Permission\Models\Permission::firstOrCreate(['name' => 'edit-pruduct']);
        $DeletePruductPermission = \Spatie\Permission\Models\Permission::firstOrCreate(['name' => 'delete-pruduct']);
        $ViewPruductPermission = \Spatie\Permission\Models\Permission::firstOrCreate(['name' => 'view-pruduct']);
        $AddAdminPermission = \Spatie\Permission\Models\Permission::firstOrCreate(['name' => 'add-admin']);
        $EditAdminPermission = \Spatie\Permission\Models\Permission::firstOrCreate(['name' => 'edit-admin']);
        $DeleteAdminPermission = \Spatie\Permission\Models\Permission::firstOrCreate(['name' => 'delete-admin']);
        $BuyProductPermission = \Spatie\Permission\Models\Permission::firstOrCreate(['name' =>'buy-product']);

        $superAdmin->givePermissionTo([$AddPruductPermission, $EditPruductPermission, $DeletePruductPermission ,$AddAdminPermission,$EditAdminPermission,$DeleteAdminPermission ]);
        $admin->givePermissionTo([$AddPruductPermission, $EditPruductPermission, $DeletePruductPermission]);
        $user->givePermissionTo([$ViewPruductPermission , $BuyProductPermission]);

    }
}
