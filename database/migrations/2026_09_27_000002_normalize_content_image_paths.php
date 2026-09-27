<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        $imageColumns = [
            'hero_slides' => 'image',
            'programs' => 'image',
            'impact_stories' => 'image',
            'leadership_team' => 'photo',
            'site_images' => 'image',
        ];

        foreach ($imageColumns as $table => $column) {
            $records = DB::table($table)
                ->where($column, 'like', '%samson-dungu-foundation/public/images/%')
                ->get(['id', $column]);

            foreach ($records as $record) {
                $path = ltrim($record->{$column}, '/');
                $legacyPrefix = 'samson-dungu-foundation/public/';

                if (str_starts_with($path, $legacyPrefix)) {
                    DB::table($table)
                        ->where('id', $record->id)
                        ->update([$column => '/' . substr($path, strlen($legacyPrefix))]);
                }
            }
        }
    }

    public function down(): void
    {
        // Canonical public image paths should not be reverted.
    }
};