<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class ServerController extends Controller
{
    public function index(): View
    {
        return view('frontend.servers.index', [
            'pageTitle' => 'Top Servers',
        ]);
    }

    public function show(string $slug): View
    {
        return view('frontend.servers.show', [
            'pageTitle' => 'View Server',
            'serverSlug' => $slug,
        ]);
    }

    public function rules(): View
    {
        return view('frontend.servers.rules', [
            'pageTitle' => 'Submit Server Rules',
        ]);
    }

    public function create(): View
    {
        return view('frontend.servers.create', [
            'pageTitle' => 'Submit Server',
        ]);
    }
}
