<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use App\Models\User;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
        $viewDashboard = Permission::firstOrCreate(['name' => 'view dashboard']);
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $admin->givePermissionTo($viewDashboard);
        $user = User::where('email', 'hello@exemple.com')->first();
        if ($user) { $user-> assignRole('admin'); } 
    }
}
