<?php
// database/migrations/2024_12_01_XXXXXX_cleanup_donations_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('donations', function (Blueprint $table) {
            // Drop the old_name column after data has been migrated
            if (Schema::hasColumn('donations', 'old_name')) {
                $table->dropColumn('old_name');
            }

            // Make first_name and last_name required
            $table->string('first_name')->nullable(false)->change();
            $table->string('last_name')->nullable(false)->change();
        });
    }

    public function down(): void
    {
        Schema::table('donations', function (Blueprint $table) {
            $table->string('old_name')->nullable();
        });
    }
};
