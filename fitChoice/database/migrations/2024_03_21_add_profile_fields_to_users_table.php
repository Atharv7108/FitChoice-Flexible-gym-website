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
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name')->after('id')->nullable();
            $table->string('last_name')->after('first_name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('fitness_goals')->nullable();
            // Rename the name column to a temporary name before dropping it
            $table->renameColumn('name', 'old_name');
        });

        // Update the first_name with the existing name data
        DB::table('users')->whereNotNull('old_name')->update([
            'first_name' => DB::raw('old_name'),
        ]);

        Schema::table('users', function (Blueprint $table) {
            // Drop the old name column
            $table->dropColumn('old_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Recreate the name column
            $table->string('name')->nullable();
            
            // Update the name column with the combined first and last name
            DB::statement('UPDATE users SET name = CONCAT(first_name, " ", COALESCE(last_name, ""))');
            
            // Drop the new columns
            $table->dropColumn(['first_name', 'last_name', 'phone_number', 'fitness_goals']);
        });
    }
}; 