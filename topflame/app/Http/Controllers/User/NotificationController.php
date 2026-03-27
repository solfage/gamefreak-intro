<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class NotificationController extends Controller
{
    public function index(): View
    {
        return view('user.notifications.index', [
            'pageTitle' => 'Notifications',
        ]);
    }
}
