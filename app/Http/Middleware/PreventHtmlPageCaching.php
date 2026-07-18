<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Stops any edge/CDN layer (Hostinger CDN, LiteSpeed, a proxy) from storing
 * rendered HTML pages.
 *
 * Every HTML response here carries a per-visitor session cookie and a CSRF
 * token baked into the markup. If an edge cache serves one visitor's HTML to
 * everyone, that CSRF token freezes and form submissions start failing with
 * 419, and fresh deploys never reach visitors or Googlebot on the cached
 * routes. Laravel already sends "Cache-Control: no-cache, private", but a CDN
 * set to "cache everything" can override it, so we send explicit, provider-
 * specific no-store signals as well.
 *
 * Scope: HTML page responses only. Static assets are served by the web server
 * (they never reach this middleware) and sitemap XML / JSON keep their own
 * caching, so both remain fully cacheable.
 */
class PreventHtmlPageCaching
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if (! str_contains((string) $response->headers->get('Content-Type'), 'text/html')) {
            return $response;
        }

        // Browsers and standards-compliant proxies (incl. the CDN-Cache-Control
        // convention several CDNs read in preference to Cache-Control).
        $response->headers->set('Cache-Control', 'private, no-cache, no-store, must-revalidate, max-age=0');
        $response->headers->set('CDN-Cache-Control', 'no-store');
        $response->headers->set('Pragma', 'no-cache');
        $response->headers->set('Expires', '0');

        // LiteSpeed powers Hostinger's stack and obeys this even when broadly
        // caching; "no-cache" here means "do not serve from the full-page cache".
        $response->headers->set('X-LiteSpeed-Cache-Control', 'no-cache');

        return $response;
    }
}
