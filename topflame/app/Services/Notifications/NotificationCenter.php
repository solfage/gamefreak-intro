<?php

namespace App\Services\Notifications;

class NotificationCenter
{
    public function userChannels(): array
    {
        return [
            'database',
            'live',
        ];
    }

    public function adminChannels(): array
    {
        return [
            'database',
            'live',
        ];
    }

    public function supportedEvents(): array
    {
        return [
            'server.approved',
            'server.rejected',
            'server.pending_again',
            'package.installed',
            'package.enabled',
            'package.disabled',
        ];
    }
}
