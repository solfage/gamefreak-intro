<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table): void {
            $table->id();
            $table->string('group_key');
            $table->string('setting_key')->unique();
            $table->longText('setting_value')->nullable();
            $table->string('value_type')->default('string');
            $table->timestamps();
        });

        Schema::create('server_votes', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('server_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->timestamp('voted_at');
            $table->timestamp('next_vote_at')->nullable();
            $table->string('vote_source')->default('topflame');
            $table->timestamps();

            $table->index(['server_id', 'user_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('server_votes');
        Schema::dropIfExists('settings');
    }
};
