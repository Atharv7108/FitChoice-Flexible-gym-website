<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Get all users who don't have first_name or last_name set
        $users = DB::table('users')
            ->whereNull('first_name')
            ->whereNull('last_name')
            ->get();

        foreach ($users as $user) {
            // Set a default name if none exists
            DB::table('users')
                ->where('id', $user->id)
                ->update([
                    'first_name' => 'User',
                    'last_name' => '#' . $user->id,
                ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Since we can't restore the original names, we'll just clear the first_name and last_name
        DB::table('users')
            ->whereRaw("first_name = CONCAT('User') AND last_name = CONCAT('#', id)")
            ->update([
                'first_name' => null,
                'last_name' => null,
            ]);
    }
};
