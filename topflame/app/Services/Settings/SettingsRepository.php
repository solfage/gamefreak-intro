<?php

namespace App\Services\Settings;

use App\Models\Setting;

class SettingsRepository
{
    public function get(string $key, mixed $default = null): mixed
    {
        $setting = Setting::query()->where('setting_key', $key)->first();

        return $setting?->setting_value ?? $default;
    }

    public function set(string $group, string $key, mixed $value, string $type = 'string'): Setting
    {
        return Setting::query()->updateOrCreate(
            ['setting_key' => $key],
            [
                'group_key' => $group,
                'setting_value' => is_scalar($value) ? (string) $value : json_encode($value),
                'value_type' => $type,
            ]
        );
    }
}
