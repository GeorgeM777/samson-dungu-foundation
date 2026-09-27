<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->text('url');
            $table->string('thumbnail')->nullable();
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        foreach ([
            ['founder_name', 'Samson Ddungu', 'text', 'Name'],
            ['founder_title', 'Founder', 'text', 'Role'],
            ['founder_tribute', 'His compassion and vision continue to guide our work, creating hope and dignity for vulnerable communities across Uganda.', 'textarea', 'Tribute'],
            ['founder_portrait', null, 'image', 'Portrait'],
        ] as [$key, $value, $type, $label]) {
            \Illuminate\Support\Facades\DB::table('site_settings')->updateOrInsert(
                ['key' => $key],
                ['value' => $value, 'type' => $type, 'group' => 'founder', 'label' => 'Founder ' . $label, 'created_at' => now(), 'updated_at' => now()]
            );
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('videos');

        \Illuminate\Support\Facades\DB::table('site_settings')
            ->whereIn('key', ['founder_name', 'founder_title', 'founder_tribute', 'founder_portrait'])
            ->delete();
    }
};