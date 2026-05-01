<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureCmsApiToken
{
    public function handle(Request $request, Closure $next): Response
    {
        $configuredToken = config('cms-api.token');
        $incomingToken = $request->bearerToken() ?: $request->header('X-CMS-Token');

        if (! is_string($configuredToken) || $configuredToken === '') {
            return response()->json([
                'message' => 'CMS API token is not configured.',
            ], Response::HTTP_SERVICE_UNAVAILABLE);
        }

        if (! is_string($incomingToken) || ! hash_equals($configuredToken, $incomingToken)) {
            return response()->json([
                'message' => 'Unauthenticated.',
            ], Response::HTTP_UNAUTHORIZED);
        }

        return $next($request);
    }
}
