<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RemovePublicUrlSegment
{
    /**
     * Handle an incoming request.
     * Redirect any URL containing /public/ to its clean canonical counterpart with 301 Moved Permanently.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $uri = $request->server('REQUEST_URI', '');

        // Check if the request path explicitly starts with /public (case-insensitive)
        if (preg_match('#^/public(?:/(.*))?$#i', $uri, $matches)) {
            $path = $matches[1] ?? '';
            // Remove potential query string from path match if present
            $path = explode('?', $path, 2)[0];
            $targetPath = '/' . ltrim($path, '/');

            $queryString = $request->getQueryString();
            if (!empty($queryString)) {
                $targetPath .= '?' . $queryString;
            }

            return redirect($targetPath, 301);
        }

        return $next($request);
    }
}
