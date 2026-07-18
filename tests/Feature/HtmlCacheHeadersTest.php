<?php

namespace Tests\Feature;

use Tests\TestCase;

/**
 * Guards the fix for edge-cached HTML freezing the CSRF token: HTML pages must
 * be marked non-storable so no CDN serves one visitor's token to everyone,
 * while non-HTML responses (sitemap XML) stay cacheable.
 */
class HtmlCacheHeadersTest extends TestCase
{
    public function test_html_pages_are_marked_no_store(): void
    {
        foreach (['/', '/aboutus', '/team', '/contact-us', '/ai-development'] as $page) {
            $response = $this->get($page);

            $cacheControl = $response->headers->get('Cache-Control');
            $this->assertStringContainsString('no-store', $cacheControl, "{$page} must be no-store");
            $this->assertStringContainsString('private', $cacheControl, "{$page} must be private");
            $this->assertSame('no-cache', $response->headers->get('X-LiteSpeed-Cache-Control'), "{$page} LiteSpeed bypass");
            $this->assertSame('no-store', $response->headers->get('CDN-Cache-Control'), "{$page} CDN bypass");
        }
    }

    /** Sitemap XML is safe to edge-cache and must NOT get the no-store treatment. */
    public function test_sitemap_xml_stays_cacheable(): void
    {
        $response = $this->get('/sitemap_allpages.xml');

        $this->assertStringNotContainsString('no-store', (string) $response->headers->get('Cache-Control'));
        $this->assertNull($response->headers->get('X-LiteSpeed-Cache-Control'));
    }
}
