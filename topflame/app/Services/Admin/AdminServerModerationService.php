<?php

namespace App\Services\Admin;

use App\Models\Server;

class AdminServerModerationService
{
    public function approve(Server $server): Server
    {
        $server->status = 'approved';
        $server->save();

        return $server;
    }

    public function reject(Server $server): Server
    {
        $server->status = 'rejected';
        $server->save();

        return $server;
    }

    public function hide(Server $server): Server
    {
        $server->status = 'hidden';
        $server->save();

        return $server;
    }
}
