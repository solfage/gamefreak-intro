<?php

namespace App\Services\Packages;

use App\Core\Support\PlatformVersion;

class PackageInstallerService
{
    public function supportedTypes(): array
    {
        return ['plugin', 'module', 'theme'];
    }

    public function currentPlatformVersion(): string
    {
        return PlatformVersion::current();
    }

    public function validateManifest(array $manifest): array
    {
        $errors = [];

        foreach (['type', 'name', 'slug', 'version'] as $requiredField) {
            if (empty($manifest[$requiredField])) {
                $errors[] = "Missing required manifest field: {$requiredField}";
            }
        }

        if (!empty($manifest['type']) && !in_array($manifest['type'], $this->supportedTypes(), true)) {
            $errors[] = 'Unsupported package type.';
        }

        return $errors;
    }

    public function isCompatible(array $manifest): bool
    {
        if (empty($manifest['target_version'])) {
            return true;
        }

        return $manifest['target_version'] === $this->currentPlatformVersion();
    }
}
