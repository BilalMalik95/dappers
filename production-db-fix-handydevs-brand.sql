-- Run this against the PRODUCTION database via phpMyAdmin (Hostinger) to remove
-- the old "HandyDevs" brand name and the stray handydevs.com hyperlinks that are
-- currently embedded in service/category meta titles, meta descriptions, and body
-- content on the live site. Already applied to the local dev database.
--
-- Safe to re-run (WHERE clauses only touch rows that still contain the old text).

UPDATE categories SET
  meta_title = REPLACE(REPLACE(meta_title, 'HandyDevs', 'DappersTech'), 'handydevs.com', 'dapperstech.com'),
  meta_description = REPLACE(REPLACE(meta_description, 'HandyDevs', 'DappersTech'), 'handydevs.com', 'dapperstech.com'),
  description = REPLACE(REPLACE(description, 'HandyDevs', 'DappersTech'), 'handydevs.com', 'dapperstech.com')
WHERE meta_title LIKE '%HandyDevs%' OR meta_description LIKE '%HandyDevs%' OR description LIKE '%HandyDevs%' OR description LIKE '%handydevs.com%';

UPDATE services SET
  meta_title = REPLACE(REPLACE(meta_title, 'HandyDevs', 'DappersTech'), 'handydevs.com', 'dapperstech.com'),
  meta_description = REPLACE(REPLACE(meta_description, 'HandyDevs', 'DappersTech'), 'handydevs.com', 'dapperstech.com'),
  short_description = REPLACE(REPLACE(short_description, 'HandyDevs', 'DappersTech'), 'handydevs.com', 'dapperstech.com'),
  description = REPLACE(REPLACE(description, 'HandyDevs', 'DappersTech'), 'handydevs.com', 'dapperstech.com')
WHERE meta_title LIKE '%HandyDevs%' OR meta_description LIKE '%HandyDevs%' OR short_description LIKE '%HandyDevs%' OR description LIKE '%HandyDevs%' OR description LIKE '%handydevs.com%';

-- Cosmetic cleanup: fixes 3 meta_title strings that had dangling punctuation
-- left over from a previous partial edit of this same content.
UPDATE services SET meta_title = 'Custom Website Development Services | DappersTech' WHERE id = 1 AND slug = 'custom-website-development';
UPDATE services SET meta_title = 'SEO-Friendly Design Services | Boost Search Rankings with DappersTech' WHERE id = 10 AND slug = 'seo-friendly-design';
UPDATE services SET meta_title = 'Responsive Web Design Services | Mobile-Friendly & SEO-Optimized Layouts | DappersTech' WHERE id = 11 AND slug = 'responsive-design';

-- Verify no occurrences remain (both should return 0):
-- SELECT COUNT(*) FROM categories WHERE meta_title LIKE '%HandyDevs%' OR meta_description LIKE '%HandyDevs%' OR description LIKE '%HandyDevs%';
-- SELECT COUNT(*) FROM services WHERE meta_title LIKE '%HandyDevs%' OR meta_description LIKE '%HandyDevs%' OR short_description LIKE '%HandyDevs%' OR description LIKE '%HandyDevs%';

-- Founder schema fix: normalize "BILAL MALIK" casing and point the founder's
-- schema URL at malikbilal.com to match how about-us.blade.php already
-- references the founder, instead of a self-referential /team URL.
-- Adjust the WHERE clause if the founder's row id differs on production.
UPDATE team_members SET name = 'Bilal Malik', website = 'https://malikbilal.com' WHERE is_founder = 1 AND name = 'BILAL MALIK';

-- Duplicate/broken blog post: slug "great-ui/ux-design" contains a literal "/"
-- so it 404s (this was the original bug report earlier in this project), and it's
-- an exact duplicate (same title, same 839-char body) of the corrected post at
-- slug "why-great-uiux-design-is-essential" which was published a few hours later
-- the same day. Unpublishing rather than deleting so the record is preserved.
-- Check the id matches on production first (SELECT id, slug, status FROM blogs WHERE slug = 'great-ui/ux-design').
UPDATE blogs SET status = 0 WHERE slug = 'great-ui/ux-design';

-- Add local (Rawalpindi/Islamabad) signal to the 3 category pages' title/H1/meta.
-- The audit found these service pages carried zero local signal despite the
-- homepage being fully local-optimized.
UPDATE categories SET
  title = 'Web Development That Grows Your Business, Based in Rawalpindi',
  meta_title = 'Web Development Services in Rawalpindi, Pakistan | DappersTech',
  meta_description = 'DappersTech is a Rawalpindi-based software house delivering custom websites, SaaS platforms, and web applications for clients across Rawalpindi, Islamabad, and worldwide.'
WHERE slug = 'web-development';

UPDATE categories SET
  title = 'Creative & Conversion-Focused Web Design Services in Rawalpindi, Pakistan',
  meta_title = 'Web Design Services in Rawalpindi, Pakistan | Custom UI/UX',
  meta_description = 'Get stunning, mobile-first, SEO-optimized web design from DappersTech, a Rawalpindi-based software house serving clients in Rawalpindi, Islamabad, and worldwide.'
WHERE slug = 'web-design';

UPDATE categories SET
  title = 'Digital Marketing Services That Drive Traffic, Leads & Growth in Rawalpindi',
  meta_title = 'Digital Marketing Services in Rawalpindi, Pakistan | DappersTech',
  meta_description = 'DappersTech, a Rawalpindi-based software house, offers SEO, PPC, content, and social media strategies tailored to drive traffic and conversions for clients in Rawalpindi, Islamabad, and worldwide.'
WHERE slug = 'digital-marketing';
