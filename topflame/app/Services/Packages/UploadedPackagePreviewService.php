<?php

namespace App\Services\Packages;

class UploadedPackagePreviewService
{
    public function preview(array $manifest): array
    {
        return [
            'type' => $manifest['type'] ?? null,
            'name' => $manifest['name'] ?? null,
            'slug' => $manifest['slug'] ?? null,
            'version' => $manifest['version'] ?? null,
            'target_version' => $manifest['target_version'] ?? null,
            'compatible' => empty($manifest['target_version']) || $manifest['target_version'] === '1.0.0-foundation',
        ];
    }
}
