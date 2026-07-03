<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
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
        $categories = Category::all(); 
        return response()->view('sitemaps.sitemap_service_categories',compact('categories'))->header('Content-type', 'text/xml');
    }
     public function blogs()
    {
        $blogs = Blog::where('status',1)->get();
    
        return response()->view('sitemaps.blogs',compact('blogs'))->header('Content-type', 'text/xml');
    }
     public function service()
    {
        $services = Service::where('status',1)->with('category')->get();
      
        return response()->view('sitemaps.services',compact('services'))->header('Content-type', 'text/xml');
    }
}
