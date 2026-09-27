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
        $legacyPrefix = '/samson-dungu-foundation/public/';

        foreach ($imageColumns as $table => $column) {
            foreach (DB::table($table)->get(['id', $column]) as $record) {
                $path = '/' . ltrim((string) $record->{$column}, '/');

                if (str_starts_with($path, '/images/') && preg_match('/^\d+_[a-f0-9]+\.[a-z0-9]+$/i', basename($path))) {
                    DB::table($table)
                        ->where('id', $record->id)
                        ->update([$column => $legacyPrefix . ltrim($path, '/')]);
                }
            }
        }

        $founderPortrait = DB::table('site_settings')->where('key', 'founder_portrait')->value('value');
        if ($founderPortrait && str_starts_with($founderPortrait, '/founder-media/')) {
            DB::table('site_settings')->where('key', 'founder_portrait')->update([
                'value' => '/samson-dungu-foundation/public' . $founderPortrait,
            ]);
        }
    }

    public function down(): void
    {
        // Keep paths in the live-server format expected by the site.
    }
};