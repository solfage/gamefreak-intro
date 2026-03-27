<?php

namespace App\Services\Notifications;

use App\Models\Notification;
use App\Models\User;

class NotificationWriter
{
    public function create(User $user, string $type, string $title, ?string $message = null, array $payload = []): Notification
    {
        return Notification::query()->create([
            'user_id' => $user->id,
            'type' => $type,
            'title' => $title,
            'message' => $message,
            'payload' => $payload,
        ]);
    }
}
