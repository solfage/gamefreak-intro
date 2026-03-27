<?php

namespace App\Http\Controllers\Installer;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class InstallerController extends Controller
{
    public function index(): View
    {
        return view('installer.index', [
            'pageTitle' => 'TopFlame Installer',
        ]);
    }
}
