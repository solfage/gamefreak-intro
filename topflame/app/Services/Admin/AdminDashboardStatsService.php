<?php

namespace App\Services\Admin;

use App\Models\Module;
use App\Models\Plugin;
use App\Models\Server;
use App\Models\Theme;
use App\Models\User;

class AdminDashboardStatsService
{
    public function summary(): array
    {
        return [
            'servers_total' => Server::query()->count(),
            'servers_pending' => Server::query()->where('status', 'pending')->count(),
            'servers_premium' => Server::query()->where('is_premium', true)->count(),
            'users_total' => User::query()->count(),
            'plugins_total' => Plugin::query()->count(),
            'modules_total' => Module::query()->count(),
            'themes_total' => Theme::query()->count(),
        ];
    }
}
