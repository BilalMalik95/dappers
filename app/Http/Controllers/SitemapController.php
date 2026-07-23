<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    /**
     * Categories retired from the site entirely (see
     * HomeController::RETIRED_CATEGORY_SLUGS) - their pages 404, so neither the
     * category page nor any service under them may be submitted here.
     */
    private const RETIRED_CATEGORY_SLUGS = ['web-development', 'web-design', 'digital-marketing'];

    public function index()
    {
        return response()->view('sitemaps.sitemap')->header('Content-Type', 'text/xml');
    }
    public function pages()
    {

        return response()->view('sitemaps.allpages')->header('Content-type', 'text/xml');
    }
    public function service_categories()
    {
        $categories = Category::whereNotIn('slug', self::RETIRED_CATEGORY_SLUGS)->get();
        return response()->view('sitemaps.sitemap_service_categories',compact('categories'))->header('Content-type', 'text/xml');
    }
     public function blogs()
    {
        $blogs = Blog::where('status',1)->get();

        return response()->view('sitemaps.blogs',compact('blogs'))->header('Content-type', 'text/xml');
    }
     public function service()
    {
        $services = Service::where('status',1)->with('category')->get()->reject(function ($service) {
            $categorySlug = $service->category->slug ?? null;
            return $categorySlug && in_array($categorySlug, self::RETIRED_CATEGORY_SLUGS, true);
        });

        return response()->view('sitemaps.services',compact('services'))->header('Content-type', 'text/xml');
    }
}
