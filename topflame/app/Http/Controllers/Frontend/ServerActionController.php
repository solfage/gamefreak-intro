<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServerRequest;
use App\Services\Servers\ServerSubmissionService;
use Illuminate\Http\RedirectResponse;

class ServerActionController extends Controller
{
    public function __construct(
        protected ServerSubmissionService $serverSubmissionService = new ServerSubmissionService()
    ) {
    }

    public function store(StoreServerRequest $request): RedirectResponse
    {
        $server = $this->serverSubmissionService->create($request->user(), $request->validated());

        return redirect()
            ->back()
            ->with('success', "Server '{$server->name}' was submitted and is now pending approval.");
    }
}
