<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;



class BlogController extends Controller
{
    private function storeUploadedImage(Request $request, string $fieldName, string $directory): ?string
    {
        if (!$request->hasFile($fieldName)) {
            return null;
        }

        $uploadPath = public_path($directory);
        if (!file_exists($uploadPath)) {
            mkdir($uploadPath, 0755, true);
        }

        $image = $request->file($fieldName);
        $filenameWithoutExtension = Str::beforeLast($image->getClientOriginalName(), '.');
        $imageSlug = Str::slug($filenameWithoutExtension);
        $imageName = $imageSlug . '-' . time() . '.' . $image->extension();
        $image->move($uploadPath, $imageName);

        return $imageName;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::with('user')->get();
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'status' => 'required|in:0,1',
            'feature_blog' => 'required|in:0,1',
            'category' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:blogs,slug',
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,webp,svg,png,jpg,gif|max:2048',
            'short_description' => 'required|string',
            'description' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect('admin/blogs/create')
                ->withErrors($validator)
                ->withInput();
        }

        DB::beginTransaction();

        try {
            $blog = new Blog();
            $blog->user_id = Auth::user()->id;
            $blog->category = $request->category;
            $blog->title = $request->title;
            $blog->slug = $request->slug;
            $blog->short_description = $request->short_description;
            $blog->description = $request->description;
            $blog->meta_title = $request->title;
            $blog->meta_keywords = $request->title;
            $blog->meta_description = $request->short_description;
            $blog->status = $request->status;
            $blog->feature_blog = $request->feature_blog;
            $blog->image = $this->storeUploadedImage($request, 'image', 'frontend/assets/images/blog') ?? '';
            $blog->save();
            DB::commit();
            

            return redirect('admin/blogs')->with('success', 'Blog added successfully');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('blog store: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to create blog. ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blogs = Blog::findOrFail($id);
        return view('admin.blogs.update', compact('blogs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {

    // dd($request->all());
        $validator = Validator::make($request->all(), [
            'blog_id' => 'required|integer',
            'category' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:blogs,slug,' . $request->blog_id,
            'short_description' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,webp,svg,png,jpg,gif|max:2048',
            'status' => 'required|in:0,1',
            'feature_blog' => 'required|in:0,1',
        ]);

        if ($validator->fails()) {
            return redirect('admin/blogs/edit/' . $request->blog_id)
                ->withErrors($validator)
                ->withInput();
        }

        DB::beginTransaction();
        try {
            $blog = Blog::findOrFail($request->blog_id);
            $blog->user_id = Auth::user()->id;
            $blog->category = $request->category;
            $blog->title = $request->title;
            $blog->slug = $request->slug;
            $blog->short_description = $request->short_description;
            $blog->description = $request->description;
            $blog->meta_title = $request->title;
            $blog->meta_keywords = $request->title;
            $blog->meta_description = $request->short_description;
            $blog->status = $request->status;
            $blog->feature_blog = $request->feature_blog;

            if ($request->hasFile('image')) {
                $blog->image = $this->storeUploadedImage($request, 'image', 'frontend/assets/images/blog') ?? $request->old_image;
            } elseif ($request->filled('old_image')) {
                $blog->image = $request->old_image;
            }

            $blog->update();
            DB::commit();

            return redirect('admin/blogs')->with('success', 'Blog updated successfully');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('blog update: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Update failed. ' . $e->getMessage());
        }
    }

    public function uploadDescriptionImage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'upload' => 'required|image|mimes:jpeg,png,jpg,gif,webp,svg|max:4096',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => [
                    'message' => $validator->errors()->first('upload'),
                ],
            ], 422);
        }

        $imageName = $this->storeUploadedImage($request, 'upload', 'frontend/assets/images/blog/content');
        if (!$imageName) {
            return response()->json([
                'error' => [
                    'message' => 'Unable to upload the image.',
                ],
            ], 500);
        }

        return response()->json([
            'url' => asset('frontend/assets/images/blog/content/' . $imageName),
            'fileName' => $imageName,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Blog::findOrFail($id)->delete();

        return redirect('admin/blogs')->with('success', 'Blog deleted successfully');
    }
}
