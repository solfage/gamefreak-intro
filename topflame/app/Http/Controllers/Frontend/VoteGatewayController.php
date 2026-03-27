<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class VoteGatewayController extends Controller
{
    public function show(string $slug): View
    {
        return view('frontend.vote.gateway', [
            'pageTitle' => 'Vote Gateway',
            'serverSlug' => $slug,
        ]);
    }
}
