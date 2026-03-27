<?php

namespace App\Services\Servers;

use App\Models\Server;
use App\Models\User;
use Illuminate\Support\Str;

class ServerSubmissionService
{
    public function create(User $user, array $data): Server
    {
        return Server::query()->create([
            'owner_user_id' => $user->id,
            'name' => $data['name'],
            'slug' => Str::slug($data['name']) . '-' . Str::lower(Str::random(6)),
            'hostname' => $data['hostname'],
            'login_port' => $data['login_port'],
            'game_port' => $data['game_port'],
            'chronicle' => $data['chronicle'],
            'rate_exp' => $data['rate_exp'],
            'rate_sp' => $data['rate_sp'],
            'rate_adena' => $data['rate_adena'],
            'website_url' => $data['website_url'] ?? null,
            'discord_url' => $data['discord_url'] ?? null,
            'description' => $data['description'] ?? null,
            'status' => 'pending',
            'is_premium' => false,
            'skip_reapproval' => false,
        ]);
    }
}
