<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('servers', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('owner_user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->string('hostname')->unique();
            $table->string('login_port');
            $table->string('game_port');
            $table->string('chronicle');
            $table->unsignedInteger('rate_exp')->default(1);
            $table->unsignedInteger('rate_sp')->default(1);
            $table->unsignedInteger('rate_adena')->default(1);
            $table->string('website_url')->nullable();
            $table->string('discord_url')->nullable();
            $table->string('logo_path')->nullable();
            $table->string('banner_path')->nullable();
            $table->text('description')->nullable();
            $table->enum('status', ['pending', 'approved', 'rejected', 'hidden'])->default('pending');
            $table->boolean('is_premium')->default(false);
            $table->string('premium_type')->nullable();
            $table->timestamp('premium_starts_at')->nullable();
            $table->timestamp('premium_ends_at')->nullable();
            $table->boolean('skip_reapproval')->default(false);
            $table->timestamps();
        });

        Schema::create('plugins', function (Blueprint $table): void {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('version');
            $table->string('target_version')->nullable();
            $table->boolean('is_enabled')->default(false);
            $table->json('manifest')->nullable();
            $table->timestamps();
        });

        Schema::create('modules', function (Blueprint $table): void {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('version');
            $table->string('target_version')->nullable();
            $table->boolean('is_enabled')->default(false);
            $table->json('manifest')->nullable();
            $table->timestamps();
        });

        Schema::create('themes', function (Blueprint $table): void {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('version');
            $table->string('target_version')->nullable();
            $table->boolean('is_enabled')->default(false);
            $table->boolean('is_default')->default(false);
            $table->json('manifest')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('themes');
        Schema::dropIfExists('modules');
        Schema::dropIfExists('plugins');
        Schema::dropIfExists('servers');
    }
};
