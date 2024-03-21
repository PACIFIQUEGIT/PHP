<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Check if the role already exists
        if (!Role::where('name', 'Admin')->exists()) {
            // Create the admin role
            $adminRole = Role::create(['name' => 'Admin']);
            
            // Define permissions explicitly for the admin role
            $permissions = Permission::all();
            $adminPermissions = $permissions->pluck('name')->toArray();
            
            // Sync permissions to the admin role
            $adminRole->syncPermissions($adminPermissions);
        }
        
        // Create the admin user
        if (!User::where('email', 'admin@gmail.com')->exists()) {
            $user = User::create([
                'name' => 'Hardik Savani', 
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123456')
            ]);
            
            // Assign the admin role to the admin user
            $user->assignRole('Admin');
        }
    }
}
