<?php

namespace App\Services\Packages;

use App\Models\Module;
use App\Models\Plugin;
use App\Models\Theme;

class PackageRegistryService
{
    public function counts(): array
    {
        return [
            'plugins' => Plugin::query()->count(),
            'modules' => Module::query()->count(),
            'themes' => Theme::query()->count(),
        ];
    }

    public function enabledCounts(): array
    {
        return [
            'plugins' => Plugin::query()->where('is_enabled', true)->count(),
            'modules' => Module::query()->where('is_enabled', true)->count(),
            'themes' => Theme::query()->where('is_enabled', true)->count(),
        ];
    }
}
