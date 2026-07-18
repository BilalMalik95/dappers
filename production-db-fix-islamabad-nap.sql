-- Run this against the PRODUCTION database via phpMyAdmin (Hostinger).
--
-- The site's canonical location is now "Islamabad, Pakistan" and the canonical
-- number is the WhatsApp line +92 333 9994544. The Blade templates were updated
-- in the same change, but the 3 category pages draw their title/meta from the
-- database, so they still carry the Rawalpindi wording written by
-- production-db-fix-handydevs-brand.sql. This brings them in line.
--
-- NAP consistency matters because Google and AI engines cross-check the address
-- and phone across every page; a page still naming Rawalpindi as the HQ splits
-- the entity.
--
-- IMPORTANT: Rawalpindi is still a legitimate *served* city and stays in the
-- copy as such (and as areaServed in the JSON-LD). Only the "based in / HQ"
-- phrasing moves to Islamabad. That is why this file rewrites specific phrases
-- instead of doing a blanket REPLACE(description,'Rawalpindi','Islamabad') --
-- a blanket swap turns "clients in Rawalpindi, Islamabad, and worldwide" into
-- "clients in Islamabad, Islamabad, and worldwide".
--
-- Safe to re-run (every WHERE clause only touches rows that still contain the
-- old text, and no replacement re-matches its own output).
--
-- Titles are kept under 60 characters and each names the brand exactly once,
-- because layout.blade.php appends " - DappersTech" only to titles that lack it.

-- 1. Category page title / H1 / meta ------------------------------------------
-- These 3 rows are set explicitly rather than pattern-replaced, so their final
-- wording is known exactly. Run this section BEFORE section 2.

UPDATE categories SET
  title = 'Web Development That Grows Your Business, Based in Islamabad',
  meta_title = 'Web Development Services in Islamabad | DappersTech',
  meta_description = 'DappersTech is an Islamabad-based software house delivering custom websites, SaaS platforms, and web applications for clients across Islamabad, Rawalpindi, and worldwide.'
WHERE slug = 'web-development';

UPDATE categories SET
  title = 'Creative & Conversion-Focused Web Design Services in Islamabad',
  meta_title = 'Web Design Services in Islamabad | DappersTech',
  meta_description = 'Get stunning, mobile-first, SEO-optimized web design from DappersTech, an Islamabad-based software house serving clients in Islamabad, Rawalpindi, and worldwide.'
WHERE slug = 'web-design';

UPDATE categories SET
  title = 'Digital Marketing That Drives Traffic, Leads & Growth in Islamabad',
  meta_title = 'Digital Marketing Services in Islamabad | DappersTech',
  meta_description = 'DappersTech, an Islamabad-based software house, offers SEO, PPC, content, and social media strategies tailored to drive traffic and conversions for clients in Islamabad, Rawalpindi, and worldwide.'
WHERE slug = 'digital-marketing';

-- 2. Rewrite HQ-identity phrasing on any other rows ---------------------------
-- Ordering matters. The paired-city phrases are reordered FIRST (keeping both
-- cities, HQ first); the remaining patterns are all HQ-identity phrases that
-- cannot match the reordered output, so re-running is a no-op.

UPDATE categories SET
  title = REPLACE(REPLACE(REPLACE(REPLACE(title,
    'Rawalpindi, Islamabad', 'Islamabad, Rawalpindi'),
    'in Rawalpindi, Pakistan', 'in Islamabad, Pakistan'),
    'Rawalpindi-based', 'Islamabad-based'),
    'Based in Rawalpindi', 'Based in Islamabad'),
  meta_title = REPLACE(REPLACE(REPLACE(REPLACE(meta_title,
    'Rawalpindi, Islamabad', 'Islamabad, Rawalpindi'),
    'in Rawalpindi, Pakistan', 'in Islamabad, Pakistan'),
    'Rawalpindi-based', 'Islamabad-based'),
    'based in Rawalpindi', 'based in Islamabad'),
  meta_description = REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(meta_description,
    'Rawalpindi, Islamabad', 'Islamabad, Rawalpindi'),
    'a Rawalpindi-based', 'an Islamabad-based'),
    'Rawalpindi-based', 'Islamabad-based'),
    'based in Rawalpindi', 'based in Islamabad'),
    'in Rawalpindi, Pakistan', 'in Islamabad, Pakistan'),
  description = REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(description,
    'Rawalpindi, Islamabad', 'Islamabad, Rawalpindi'),
    'a Rawalpindi-based', 'an Islamabad-based'),
    'Rawalpindi-based', 'Islamabad-based'),
    'based in Rawalpindi', 'based in Islamabad'),
    'in Rawalpindi, Pakistan', 'in Islamabad, Pakistan')
WHERE title LIKE '%Rawalpindi%' OR meta_title LIKE '%Rawalpindi%' OR meta_description LIKE '%Rawalpindi%' OR description LIKE '%Rawalpindi%';

UPDATE services SET
  meta_title = REPLACE(REPLACE(REPLACE(REPLACE(meta_title,
    'Rawalpindi, Islamabad', 'Islamabad, Rawalpindi'),
    'in Rawalpindi, Pakistan', 'in Islamabad, Pakistan'),
    'Rawalpindi-based', 'Islamabad-based'),
    'based in Rawalpindi', 'based in Islamabad'),
  meta_description = REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(meta_description,
    'Rawalpindi, Islamabad', 'Islamabad, Rawalpindi'),
    'a Rawalpindi-based', 'an Islamabad-based'),
    'Rawalpindi-based', 'Islamabad-based'),
    'based in Rawalpindi', 'based in Islamabad'),
    'in Rawalpindi, Pakistan', 'in Islamabad, Pakistan'),
  short_description = REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(short_description,
    'Rawalpindi, Islamabad', 'Islamabad, Rawalpindi'),
    'a Rawalpindi-based', 'an Islamabad-based'),
    'Rawalpindi-based', 'Islamabad-based'),
    'based in Rawalpindi', 'based in Islamabad'),
    'in Rawalpindi, Pakistan', 'in Islamabad, Pakistan'),
  description = REPLACE(REPLACE(REPLACE(REPLACE(REPLACE(description,
    'Rawalpindi, Islamabad', 'Islamabad, Rawalpindi'),
    'a Rawalpindi-based', 'an Islamabad-based'),
    'Rawalpindi-based', 'Islamabad-based'),
    'based in Rawalpindi', 'based in Islamabad'),
    'in Rawalpindi, Pakistan', 'in Islamabad, Pakistan')
WHERE meta_title LIKE '%Rawalpindi%' OR meta_description LIKE '%Rawalpindi%' OR short_description LIKE '%Rawalpindi%' OR description LIKE '%Rawalpindi%';

-- 3. Superseded landline and street address ------------------------------------
-- The old landline (+92-51-6125246) and the Mid City Mall address are retired
-- outright, so these are straight swaps.

UPDATE categories SET
  description = REPLACE(REPLACE(REPLACE(description,
    'Mid City Mall, Rehmanabad, Murree Road, Rawalpindi 46000', 'Islamabad, Pakistan'),
    'Mid City Mall, Rehmanabad, Murree Road', 'Islamabad, Pakistan'),
    '+92-51-6125246', '+92-333-9994544')
WHERE description LIKE '%Rehmanabad%' OR description LIKE '%6125246%';

UPDATE services SET
  description = REPLACE(REPLACE(REPLACE(description,
    'Mid City Mall, Rehmanabad, Murree Road, Rawalpindi 46000', 'Islamabad, Pakistan'),
    'Mid City Mall, Rehmanabad, Murree Road', 'Islamabad, Pakistan'),
    '+92-51-6125246', '+92-333-9994544')
WHERE description LIKE '%Rehmanabad%' OR description LIKE '%6125246%';

UPDATE blogs SET
  description = REPLACE(REPLACE(REPLACE(description,
    'Mid City Mall, Rehmanabad, Murree Road, Rawalpindi 46000', 'Islamabad, Pakistan'),
    'Mid City Mall, Rehmanabad, Murree Road', 'Islamabad, Pakistan'),
    '+92-51-6125246', '+92-333-9994544')
WHERE description LIKE '%Rehmanabad%' OR description LIKE '%6125246%';

-- 4. Verify -------------------------------------------------------------------
-- (a) These MUST return zero rows -- the retired landline and street address:
--
--   SELECT slug FROM categories WHERE description LIKE '%6125246%' OR description LIKE '%Rehmanabad%';
--   SELECT slug FROM services   WHERE description LIKE '%6125246%' OR description LIKE '%Rehmanabad%';
--   SELECT slug FROM blogs      WHERE description LIKE '%6125246%' OR description LIKE '%Rehmanabad%';
--
-- (b) These MUST return zero rows -- a doubled city means a bad replacement:
--
--   SELECT slug FROM categories WHERE meta_description LIKE '%Islamabad, Islamabad%' OR description LIKE '%Islamabad, Islamabad%';
--   SELECT slug FROM services   WHERE meta_description LIKE '%Islamabad, Islamabad%' OR description LIKE '%Islamabad, Islamabad%';
--
-- (c) These may legitimately return rows -- Rawalpindi as a SERVED city is fine
--     and should stay. Eyeball them; only rewrite ones that still claim
--     Rawalpindi is the head office:
--
--   SELECT slug, title, meta_title, meta_description FROM categories WHERE title LIKE '%Rawalpindi%' OR meta_title LIKE '%Rawalpindi%' OR meta_description LIKE '%Rawalpindi%' OR description LIKE '%Rawalpindi%';
--   SELECT slug, meta_title, meta_description FROM services   WHERE meta_title LIKE '%Rawalpindi%' OR meta_description LIKE '%Rawalpindi%' OR description LIKE '%Rawalpindi%';
--   SELECT slug, title FROM blogs WHERE description LIKE '%Rawalpindi%';
