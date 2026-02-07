<?php
// database/migrations/2024_12_01_XXXXXX_add_missing_columns_to_donations_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('donations', function (Blueprint $table) {
            // Rename existing columns to match our needs
            if (Schema::hasColumn('donations', 'name')) {
                // We'll split name into first_name and last_name
                // For now, we'll add new columns and migrate data later
                $table->string('first_name')->nullable()->after('email');
                $table->string('last_name')->nullable()->after('first_name');
                $table->string('address')->nullable()->after('phone');
                $table->renameColumn('name', 'old_name'); // Keep old data temporarily
            }

            // Add new columns we need
            $table->string('payment_method')->nullable()->change();
            $table->string('transaction_id')->nullable()->change();
            $table->renameColumn('reference', 'reference_code');

            // Update enum values for status
            $table->enum('status', ['pending', 'contacted', 'confirmed', 'completed', 'cancelled'])->default('pending')->change();

            // Add new columns
            $table->string('phone')->nullable()->change();
            $table->text('message')->nullable()->after('notes');
            $table->timestamp('contacted_at')->nullable()->after('completed_at');
            $table->timestamp('confirmed_at')->nullable()->after('contacted_at');

            // Update designation enum
            $table->string('designation')->change(); // Change from enum to string for flexibility
        });
    }

    public function down(): void
    {
        Schema::table('donations', function (Blueprint $table) {
            // Reverse the changes
            $table->dropColumn(['first_name', 'last_name', 'address', 'message', 'contacted_at', 'confirmed_at']);
            $table->renameColumn('old_name', 'name');
            $table->renameColumn('reference_code', 'reference');
            $table->enum('status', ['pending', 'completed', 'failed'])->default('pending')->change();
            $table->string('designation')->change();
        });
    }
};
