# DappersTech SEO Action Plan

Prioritized per the audit in `FULL-AUDIT-REPORT.md`. "Owner" indicates whether this is something Claude can execute directly in this codebase, requires a database content edit, requires production/hosting config access, or requires a manual off-platform action.

---

## Critical — fix immediately

1. **Strip "HandyDevs" from database content.**
   Owner: DB content edit (can be done via admin panel or direct query).
   Edit `meta_title`, `meta_description`, and body/description fields for the `web-development`, `web-design`, and `digital-marketing` category/service records. Worst offender is `/services/web-development` (10 occurrences).

2. **Rebrand the Facebook Business Page, LinkedIn company page, and Instagram profile away from "Handydevs"/"dappersolutions"/"dapper_solutions".**
   Owner: manual, off-platform (requires the user's social media account access).

3. **Fix www/non-www duplication.**
   Owner: production/hosting config (`.htaccess` or Hostinger panel).
   Pick one canonical host (recommend non-www, matching current internal links) and 301-redirect the other.

4. **Fix the trailing-slash `/public/` leak.**
   Owner: production/hosting config (`.htaccess`).
   The redirect rule currently produces indexable, self-canonicalizing URLs containing `/public/`. Redirect these to the clean canonical URL instead.

5. **Resolve the static vs. dynamic duplicate service page architecture.**
   Owner: Claude (code) — `routes/web.php`, `app/Http/Controllers/SitemapController.php`.
   Recommended fix: pick one system as canonical (likely the dynamic DB-driven one, since it's what the admin panel actually manages), 301-redirect or remove the static routes, and stop `SitemapController` from emitting the non-canonical set.

## High — fix within 1 week

6. **Fix sitewide title tag bug.**
   Owner: Claude (code) + production `.env`.
   Update `.env` `APP_NAME=Dapperstech` → `APP_NAME=DappersTech`, and fix `resources/views/frontend/layout.blade.php:6` so it doesn't double-append the brand name on pages whose `@yield('title')` already includes it.

7. **Fix broken `/about-us` JSON-LD URL.**
   Owner: Claude (code) — `resources/views/frontend/about-us.blade.php`. Change hardcoded `/about-us` to `/aboutus`.

8. **Fix founder name/URL inconsistency in Team schema.**
   Owner: Claude (code) — `resources/views/frontend/team.blade.php`. Normalize "BILAL MALIK" casing and point the URL at `malikbilal.com` (or whichever is the intended canonical personal-brand URL — confirm with user).

9. **Add internal links between blog posts and related service pages.**
   Owner: Claude (code/content) — 2–4 contextual links per post, both directions.

10. **Fix Core Web Vitals blockers.**
    Owner: Claude (code) + asset work.
    - Remove or fix the 753KB preloaded-but-unused image.
    - Self-host the hotlinked Pexels hero image instead of hotlinking; compress it.
    - Compress the 1.88MB blog hero PNG to WebP.
    - Add `defer` to the jQuery `<script>` tag.

11. **Enable page-level caching / fix TTFB.**
    Owner: production/hosting config. Current `Cache-Control: no-cache, private` on all pages means every request pays full server render cost — investigate Laravel response caching or Hostinger-level caching.

12. **Add local signal (city/area) to service page titles, H1s, meta descriptions, and body copy.**
    Owner: Claude (code/content) — brings service pages in line with the homepage's local optimization.

13. **Deduplicate case-sensitive route variants** (e.g. `/Web-Development` vs `/web-development`).
    Owner: Claude (code) — force lowercase routing or redirect.

## Medium — fix within 1 month

14. Consolidate `Organization` schema to a single canonical `@id`-tagged node referenced across About/Team/Blog/Service pages instead of repeated inline nodes. Owner: Claude (code).
15. Expand the 4 existing blog posts toward genuine depth (~1,500 words where the topic warrants it), add named author attribution + author bio/schema, add FAQ sections. Owner: content work (Claude can draft, user should review/approve before publishing).
16. Add `lastmod`, `priority`, `changefreq` to all sitemap views. Owner: Claude (code) — `resources/views/sitemaps/*.blade.php`.
17. Add `llms.txt`. Owner: Claude (code) — new file at site root.
18. Replace remaining 3 team member placeholder avatars with real photos. Owner: manual (user needs to supply/upload photos via admin panel).
19. Add Google Business Profile verification + start collecting/displaying real client reviews/testimonials. Owner: manual, off-platform.
20. Tighten CSP header, remove/obscure `X-Powered-By`. Owner: production config.

## Low — backlog

21. Add `IndexNow` submission on publish/update.
22. Improve passage-level citability (134–167 word self-contained chunks) across body content for AI-search quoting.

---

## What Claude can start on right now vs. what needs you first

**Ready to implement immediately in this codebase** (items 6, 7, 8, 9, 10, 12, 13, 14, 16, 17 — all Blade/PHP/route edits): I can do these directly, the same way I fixed the earlier image-upload bugs.

**Needs a decision from you first:**
- Item 5 (which duplicate route system to keep — static or dynamic) — this changes live URLs, want your sign-off before I touch it.
- Item 8 (which URL the founder schema should point to — `malikbilal.com` or something else).
- Item 15 (whether you want me to draft longer blog content, or you'll handle that yourselves).

**Needs your access, not mine:**
- Items 2, 18, 19 (social media accounts, photo uploads, GBP).
- Items 3, 4, 11, 20 (`.htaccess`/hosting panel — I don't have server/hosting credentials).

**Database content edit** (item 1) — I can do this via the admin panel UI or a direct query if you'd like, same as any other content fix this session.
