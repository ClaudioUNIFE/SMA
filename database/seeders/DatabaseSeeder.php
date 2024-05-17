<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function seedPermissions () {
        Permission::create(['name' => 'view-subscription-type-cards']);
        Permission::create(['name' => 'add-new-expert']);
        Permission::create(['name' => 'see-appointments']);
        Permission::create(['name' => 'see-diary']);
        Permission::create(['name' => 'add-new-post']);
        Permission::create(['name' => 'add-new-appointment']);
        Permission::create(['name' => 'see-emergency-contacts']);
        Permission::create(['name' => 'subscription-to-therapist']);
    }

    public function seedRoles () {
        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo('add-new-expert');

        $role = Role::create(['name' => 'intern']);
        $role->givePermissionTo('see-appointments', 'add-new-post', 'add-new-appointment');

        $role = Role::create(['name' => 'researcher']);
        $role->givePermissionTo('view-subscription-type-cards', 'see-diary', 'see-appointments', 'see-emergency-contacts');

        $role = Role::create(['name' => 'visitor']);
        $role->givePermissionTo('view-subscription-type-cards', 'see-diary', 'see-appointments', 'see-emergency-contacts');

    }


    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
