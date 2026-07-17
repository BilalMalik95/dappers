<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactUsUserController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\TeamMemberController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/landing', [LandingPageController::class, 'index']);
Route::post('/lead-store', [LandingPageController::class, 'store'])->name('lead.store');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/team', [HomeController::class, 'team'])->name('team');
Route::get('/services/ai-development/rag-systems', [HomeController::class, 'aiRagSystems'])->name('ai_rag_systems');
Route::get('/services/ai-development/ai-agents', [HomeController::class, 'aiAgents'])->name('ai_agents');
Route::get('/services/ai-development/llm-integration', [HomeController::class, 'aiLlmIntegration'])->name('ai_llm_integration');
Route::get('/services/ai-development/ai-backend-deployment', [HomeController::class, 'aiBackendDeployment'])->name('ai_backend_deployment');
Route::get('/services/web-development/custom-website-development', [HomeController::class, 'webDevCustom'])->name('web_dev_custom');
Route::get('/services/web-development/laravel-development', [HomeController::class, 'webDevLaravel'])->name('web_dev_laravel');
Route::get('/services/web-development/php-development', [HomeController::class, 'webDevPhp'])->name('web_dev_php');
Route::get('/services/web-design/ui-ux-design', [HomeController::class, 'uiUxDesign'])->name('ui_ux_design');
Route::get('/services/web-design/graphic-design-branding', [HomeController::class, 'graphicDesignBranding'])->name('graphic_design_branding');
Route::get('/services/web-design/responsive-design', [HomeController::class, 'responsiveDesign'])->name('responsive_design');
Route::get('/contact-us', [HomeController::class, 'contact_us'])->name('contact_us');
// Route::get('/about-us',[HomeController::class,'aboutus'])->name('about-us');
Route::post('/contact-us', [HomeController::class, 'form_submit_contact'])->name('contact.save');
Route::post('/newsletter-subscribe', [HomeController::class, 'subscribeNewsletter'])->name('newsletter.subscribe');
Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');
Route::get('/blogs-details', [HomeController::class, 'blog_detail'])->name('blogsdetail');


Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap.index');
Route::get('/sitemap_allpages.xml', [SitemapController::class, 'pages'])->name('sitemap.pages');
Route::get('/sitemap_service_categories.xml', [SitemapController::class, 'service_categories'])->name('sitemap.service_categories');
Route::get('/sitemap_blogs.xml', [SitemapController::class, 'blogs'])->name('sitemap.blogs');
Route::get('/sitemap_services.xml', [SitemapController::class, 'service'])->name('sitemap.services');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    // ____USERS______
    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users.index');
    Route::post('/admin/users/store', [UserController::class, 'store'])->name('admin.users.store');
    Route::post('/admin/users/edit', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::post('/admin/users/update', [UserController::class, 'update'])->name('admin.users.update');
    Route::get('/admin/users/destroy/{id}', [UserController::class, 'destroy'])->name('admin.users.destroy');
    // /____CATEGORY_____
    Route::get('/admin/categories', [CategoryController::class, 'index'])->name('admin.categories.index');
    Route::post('/admin/categories/store', [CategoryController::class, 'store'])->name('admin.categories.store');
    Route::post('/admin/categories/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');
    Route::post('/admin/categories/update', [CategoryController::class, 'update'])->name('admin.categories.update');
    Route::get('/admin/categories/destroy/{id}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');
    // //_____ SERVICES ________
    Route::get('/admin/services', [ServiceController::class, 'index'])->name('admin.services.index');
    Route::get('/admin/services/create', [ServiceController::class, 'create'])->name('admin.services.create');
    Route::post('/admin/services/store', [ServiceController::class, 'store'])->name('admin.services.store');
    Route::get('/admin/services/edit/{id}', [ServiceController::class, 'edit'])->name('admin.services.edit');
    Route::post('/admin/services/update', [ServiceController::class, 'update'])->name('admin.services.update');
    Route::get('/admin/service/destroy/{id}', [ServiceController::class, 'destroy'])->name('admin.service.destroy');

    // ////_________ Blogs  ________
    Route::get('/admin/blogs', [BlogController::class, 'index'])->name('admin.blogs.index');
    Route::get('/admin/blogs/create', [BlogController::class, 'create'])->name('admin.blogs.create');
    Route::post('/admin/blogs/store', [BlogController::class, 'store'])->name('admin.blogs.store');
    Route::get('/admin/blogs/edit/{id}', [BlogController::class, 'edit'])->name('admin.blogs.edit');
    Route::post('/admin/blogs/update', [BlogController::class, 'update'])->name('admin.blogs.update');
    Route::get('/admin/blog/destroy/{id}', [BlogController::class, 'destroy'])->name('admin.blog.destroy');
    Route::post('/admin/blogs/description-image-upload', [BlogController::class, 'uploadDescriptionImage'])->name('admin.blogs.description-image-upload');

    // ////_________ Team Members  ________
    Route::get('/admin/team-members', [TeamMemberController::class, 'index'])->name('admin.team-members.index');
    Route::get('/admin/team-members/create', [TeamMemberController::class, 'create'])->name('admin.team-members.create');
    Route::post('/admin/team-members/store', [TeamMemberController::class, 'store'])->name('admin.team-members.store');
    Route::get('/admin/team-members/edit/{id}', [TeamMemberController::class, 'edit'])->name('admin.team-members.edit');
    Route::post('/admin/team-members/update', [TeamMemberController::class, 'update'])->name('admin.team-members.update');
    Route::get('/admin/team-members/destroy/{id}', [TeamMemberController::class, 'destroy'])->name('admin.team-members.destroy');

    // ////-------------- Email Acccounts --------
    Route::get('/admin/email-accounts', [EmailController::class, 'index'])->name('admin.emailaccounts.index');
    Route::get('/admin/email-accounts/create', [EmailController::class, 'create'])->name('admin.emailaccounts.create');
    Route::post('/admin/email-accounts/store', [EmailController::class, 'store'])->name('admin.emailaccounts.store');
    Route::get('/admin/email-accounts/destroy/{id}', [EmailController::class, 'destroy'])->name('admin.emailaccounts.destroy');
    Route::get('admin/email-accounts/edit/{id}', [EmailController::class, 'edit'])->name('admin.emailaccounts.edit');
    Route::post('admin/email-accounts/update', [EmailController::class, 'update'])->name('admin.emailaccounts.update');

    // ////_________ Contact Submissions  ________
    Route::get('/admin/contact-us-users', [ContactUsUserController::class, 'index'])->name('admin.contact-users.index');
    Route::get('/admin/contact-us-users/show/{id}', [ContactUsUserController::class, 'show'])->name('admin.contact-users.show');
    Route::post('/admin/contact-us-users/update', [ContactUsUserController::class, 'update'])->name('admin.contact-users.update');
    Route::post('/admin/contact-us-users/clear-notes/{id}', [ContactUsUserController::class, 'clearNotes'])->name('admin.contact-users.clear-notes');
    Route::get('/admin/contact-us-users/destroy/{id}', [ContactUsUserController::class, 'destroy'])->name('admin.contact-users.destroy');
});

Route::get('blog/{slug}', [HomeController::class, 'SingleBlog'])->name('SingleBlog');
Route::get('/{category}', [HomeController::class, 'category'])->name('category');
Route::get('{category}/{slug}', [HomeController::class, 'SingleService'])->name('singleService');
Route::post('Moreblogs', [HomeController::class, 'moreblogs'])->name('moreblogs');

// ////---------------- Sitemap--------//////
