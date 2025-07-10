<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Check if admin already exists
        if (!Admin::where('email', 'admin@fitchoice.com')->exists()) {
            $admin = new Admin();
            $admin->name = 'Super Admin';
            $admin->email = 'admin@fitchoice.com';
            $admin->password = Hash::make('admin123');
            $admin->save();
        }
    }
}
