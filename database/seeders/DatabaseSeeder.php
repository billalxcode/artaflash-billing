<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        if (!Role::where(['name' => 'admin'])->exists()) {
            Role::create(['name' => 'admin']);
        }
        if (!Role::where(['name' => 'teknisi'])->exists()) {
            Role::create(['name' => 'teknisi']);
        }
        if (!Role::where(['name' => 'pelanggan'])->exists()) {
            Role::create(['name' => 'pelanggan']);
        }

        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@artaflash.net.id',
        ])->assignRole('admin');
    }
}
