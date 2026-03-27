<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserCanVote
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->user()) {
            abort(403, 'You must be logged in to vote.');
        }

        return $next($request);
    }
}
