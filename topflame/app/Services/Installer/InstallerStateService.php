<?php

namespace App\Services\Installer;

class InstallerStateService
{
    public function steps(): array
    {
        return [
            'welcome',
            'requirements',
            'permissions',
            'database',
            'configuration',
            'admin',
            'finish',
        ];
    }

    public function currentStepIndex(string $step): int
    {
        $steps = $this->steps();
        $index = array_search($step, $steps, true);

        return $index === false ? 0 : $index;
    }
}
