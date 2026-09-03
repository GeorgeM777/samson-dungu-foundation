<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->longText('value')->nullable();
            $table->string('type')->default('text');
            $table->string('group')->default('general');
            $table->string('label');
            $table->text('description')->nullable();
            $table->timestamps();
        });

        Schema::create('hero_slides', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('title');
            $table->text('subtitle')->nullable();
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        Schema::create('impact_stats', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->string('label');
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('icon')->nullable();
            $table->text('short_description');
            $table->string('image')->nullable();
            $table->json('bullets')->nullable();
            $table->json('stats')->nullable();
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        Schema::create('impact_stories', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('image')->nullable();
            $table->string('link')->nullable();
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        Schema::create('leadership_team', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('position');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('bio');
            $table->string('photo')->nullable();
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        Schema::create('site_images', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->string('image');
            $table->string('label');
            $table->text('description')->nullable();
            $table->string('group')->default('general');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('site_images');
        Schema::dropIfExists('leadership_team');
        Schema::dropIfExists('impact_stories');
        Schema::dropIfExists('programs');
        Schema::dropIfExists('impact_stats');
        Schema::dropIfExists('hero_slides');
        Schema::dropIfExists('site_settings');
    }
};
