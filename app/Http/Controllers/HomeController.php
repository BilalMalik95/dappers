<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Mail\NewsletterSubscriptionMail;
use App\Models\Blog;
use App\Models\Category;
use App\Models\ContactUsUser;
use App\Models\Service;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        $blogs = Blog::with('user')
            ->where('status', 1)
            ->where('feature_blog', 1)
            ->latest()
            ->take(3)
            ->get();
        $categoriesServices = Category::with('service')->take(6)->get();
        return view('frontend.home', compact('services', 'categoriesServices', 'blogs'));
    }

    public function blogs(Request $request)
    {
        $query = Blog::with('user')->where('status', 1);

        if ($request->filled('search')) {
            $query->where('title', 'like', '%' . $request->string('search') . '%');
        }

        $blogs = $query->latest()->paginate(9)->withQueryString();

        return view('frontend.blogs', compact('blogs'));
    }

    public function blog_detail()
    {
        return view('frontend.blog-detail');
    }
    public function moreblogs(Request $request)
    {
        $moreblog = Blog::with('user')->skip($request->offset)->take($request->limit)->get();
        $blogs = [];
        foreach ($moreblog as $key => $blog) {
            // if(count($blogs))
            $blogs[] = '<div class="col-lg-4 col-md-6 blog col-12 mt--30" >
                           <div class="rainbow-card box-card-style-default">
                                 <div class="inner">
                                    <div class="thumbnail"><a class="image" href=" ' . route('SingleBlog', $blog->slug) . ' ">
                                     <img class="w-100" src="' . asset('frontend/assets/images/blog') . '/' . $blog->image . '" alt="' . $blog->user->name . '"></a>
                                    </div>
                                    <div class="content">
                                        <ul class="rainbow-meta-list">
                                            <li><a href="#">' . $blog->user->name . '</a></li>
                                            <li class="separator">/</li>
                                            <li>' . $blog->created_at->format('j F y') . '</li>
                                        </ul>
                                        <h4 class="title"><a href=" ' . route('SingleBlog', $blog->slug) . '">' . $blog->title . '</a></h4>
                                        <p>' . Str::substr($blog->short_description, '0', '100') . '...</p>
                                    </div>
                                </div>
                             </div>
                        </div>';
        }
        $Allblogs = Blog::all();
        $new_data['blogs'] = $blogs;
        $new_data['count'] = count($Allblogs);
        $data = json_encode($new_data);
        return $data;
    }
  
    // public function services()
    // {
    //     return '<h1>Coming Soon</h1>';
    // }
    public function SingleService($category, $slug)
    {
        $categoryService = Category::where('slug', $category)->with('service', function ($query) use ($slug) {
            $query->where('slug', $slug);
        })->first();
        return view('frontend.service-details', compact('categoryService'));
    }
    public function SingleBlog($slug)
    {
        $blog = Blog::with('user')
            ->where('slug', $slug)
            ->where('status', 1)
            ->firstOrFail();

        return view('frontend.blog', compact('blog'));
    }
    public function category($slug)
    {

        $category = Category::where('slug', $slug)->with('service')->first();
        if (isset($category->slug) && !empty($category->slug)) {
            return view('frontend.category', compact('category'));
        } else {
            abort(404);
        }
    }
    public function contact_us()
    {
        return view('frontend.contact');
    }
    public function aboutus()
    {
        return view('frontend.about-us');
    }
    public function team()
    {
        $teamMembers = TeamMember::active()->ordered()->get();
        $founder = $teamMembers->firstWhere('is_founder', true);
        $otherMembers = $teamMembers->reject(fn ($member) => $member->is(($founder)));

        return view('frontend.team', compact('teamMembers', 'founder', 'otherMembers'));
    }

    public function services()
    {
        return view('frontend.services');
    }

    public function aiDevelopment()
    {
        return view('frontend.ai-development');
    }

    public function aiRagSystems()
    {
        return view('frontend.ai-rag-systems');
    }

    public function aiAgents()
    {
        return view('frontend.ai-agents');
    }

    public function aiLlmIntegration()
    {
        return view('frontend.ai-llm-integration');
    }

    public function aiBackendDeployment()
    {
        return view('frontend.ai-backend-deployment');
    }

    public function webDevelopment()
    {
        $category = Category::where('slug', 'web-development')
            ->with(['service' => fn ($query) => $query->where('status', 1)->orderBy('id')])
            ->first();

        return view('frontend.web-development', compact('category'));
    }

    public function webDevCustom()
    {
        return view('frontend.web-dev-custom');
    }

    public function webDevLaravel()
    {
        return view('frontend.web-dev-laravel');
    }

    public function webDevPhp()
    {
        return view('frontend.web-dev-php');
    }

    public function webDesign()
    {
        $category = Category::where('slug', 'web-design')
            ->with(['service' => fn ($query) => $query->where('status', 1)->orderBy('id')])
            ->first();

        return view('frontend.web-design', compact('category'));
    }

    public function uiUxDesign()
    {
        return view('frontend.ui-ux-design');
    }

    public function graphicDesignBranding()
    {
        return view('frontend.graphic-design-branding');
    }

    public function responsiveDesign()
    {
        return view('frontend.responsive-design');
    }

    public function seoOptimization()
    {
        return view('frontend.seo-optimization');
    }

    public function digitalMarketing()
    {
        $category = Category::where('slug', 'digital-marketing')
            ->with(['service' => fn ($query) => $query->where('status', 1)->orderBy('id')])
            ->first();

        return view('frontend.digital-marketing', compact('category'));
    }

    public function ppcAdvertising()
    {
        return view('frontend.ppc-advertising');
    }
    public function subscribeNewsletter(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Please enter a valid email address.',
                'errors' => $validator->errors(),
            ], 422);
        }

        try {
            Mail::to('munaza6961@gmail.com')->send(new NewsletterSubscriptionMail($request->email));

            return response()->json([
                'status' => 'success',
                'message' => 'Thanks for contacting us! We will respond within 24 hours.',
            ]);
        } catch (\Exception $e) {
            Log::error('Newsletter Subscribe: ' . $e->getMessage());

            return response()->json([
                'status' => 'error',
                'message' => 'Unable to subscribe right now. Please try again later.',
            ], 500);
        }
    }

    public function form_submit_contact(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:30',
            'company' => 'nullable|string|max:255',
            'service' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Please check the form fields and try again.',
                'errors' => $validator->errors(),
            ], 422);
        }

        try {
            $validated = $validator->validated();
            ContactUsUser::create($validated);

            try {
                Mail::to('munaza6961@gmail.com')->send(new ContactFormMail($validated));
            } catch (\Exception $e) {
                Log::error('Contact Form Mail: ' . $e->getMessage());
            }

            return response()->json([
                'status' => 'success',
                'message' => 'Thanks for contacting us! We will respond within 24 hours.',
            ]);
        } catch (\Exception $e) {
            Log::error('Contact Form Submit: ' . $e->getMessage());

            return response()->json([
                'status' => 'error',
                'message' => 'Unable to submit your message right now. Please try again later.',
            ], 500);
        }
    }



   
}
