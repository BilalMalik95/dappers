<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\MessageBag;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.category', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'slug' => 'required|string',
            'title' => 'required|string',
            'image' => 'required|image|mimes:jpeg,webp,svg,png,jpg,gif|max:2048',
            'preview_url' => 'nullable|string',
            'description' => 'required|string',
            'meta_title' => 'required|string',
            'meta_keywords' => 'required|string',
            'meta_description' => 'required|string',
        ]);
        if ($validator->fails()) {
            $customErrors = new MessageBag(['add_category' => 'Something went wrong while adding category.']);

            $allErrors = $validator->errors()->merge($customErrors);
            return redirect('admin/categories')->withErrors($validator)->withInput();
        } else {
            DB::beginTransaction();
            try {
                $category = new Category();
                $category->name = $request->name;
                $category->slug = $request->slug;
                $category->title = $request->title;
                $category->description = $request->description;
                $category->meta_title = $request->meta_title;
                $category->meta_keywords = $request->meta_keywords;
                $category->meta_description = $request->meta_description;
                if ($request->hasFile('image')) {
                    $uploadPath = public_path('frontend/assets/images');
                    if (!file_exists($uploadPath)) {
                        mkdir($uploadPath, 0755, true);
                    }
                    $image = $request->file('image');
                      $filenameWithoutExtension = Str::beforeLast($image->getClientOriginalName(), '.');
                    $imageSlug = Str::slug($filenameWithoutExtension);
                    $imageName = $imageSlug . '-' . time() . '.' . $image->extension();
                    $image->move($uploadPath, $imageName);
                    $category->image = $imageName;
                }
                $category->save();
                DB::commit();
                return redirect('admin/categories')->with('success', 'Category added successfully.');
            } catch (Exception $e) {
                DB::rollBack();
                Log::error('Category store: ' . $e->getMessage());
                $customErrors = new MessageBag(['add_category' => 'Something went wrong while adding category.']);
                $allErrors = $customErrors->merge(['error' => $e->getMessage()]);
                return redirect('admin/categories')->withErrors($allErrors)->withInput();
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $userID = $request->id;
        $user = Category::find($userID);
        if ($user) {
            $data = [
                'success' => true,
                'data' => $user
            ];
        } else {
            $data = [
                'success' => false,
                'data' => 'User Not Found!'
            ];
        }
        return response($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $validator = Validator::make($request->all(), [
            'edit_id' => 'required|string',
            'edit_name' => 'required|string',
            'edit_slug' => 'required|string',
            'edit_title' => 'required|string',
            'edit_old_image' => 'nullable|string',
            'edit_image' => 'nullable|image|mimes:jpeg,webp,svg,png,jpg,gif|max:2048',
            'edit_description' => 'required|string',
            'edit_meta_title' => 'required|string',
            'edit_meta_keywords' => 'required|string',
            'edit_meta_description' => 'required|string',
        ]);
        if ($validator->fails()) {
            $customErrors = new MessageBag(['update_category' => 'Something went wrong while updating category.']);

            $allErrors = $validator->errors()->merge($customErrors);
            return redirect('admin/categories')->withErrors($validator)->withInput();
        } else {
            DB::beginTransaction();
            try {
                $category = Category::find($request->edit_id);
                $category->name = $request->edit_name;
                $category->slug = $request->edit_slug;
                $category->title = $request->edit_title;
                $category->description = $request->edit_description;
                $category->meta_title = $request->edit_meta_title;
                $category->meta_keywords = $request->edit_meta_keywords;
                $category->meta_description = $request->edit_meta_description;
                if ($request->hasFile('edit_image')) {
                    $uploadPath = public_path('frontend/assets/images');
                    if (!file_exists($uploadPath)) {
                        mkdir($uploadPath, 0755, true);
                    }
                    $image = $request->file('edit_image');
                    $filenameWithoutExtension = Str::beforeLast($image->getClientOriginalName(), '.');
                    $imageSlug = Str::slug($filenameWithoutExtension);
                    $imageName = $imageSlug . '-' . time() . '.' . $image->extension();
                    $image->move($uploadPath, $imageName);
                    $category->image = $imageName;
                } else {
                    $category->image = $request->edit_old_image;
                }
                $category->update();
                DB::commit();
                return redirect('admin/categories')->with('success', 'Category Updated successfully.');
            } catch (Exception $e) {
                DB::rollBack();
                Log::error('Category store: ' . $e->getMessage());
                $customErrors = new MessageBag(['update_category' => 'Something went wrong while updating category.']);
                $allErrors = $customErrors->merge(['error' => $e->getMessage()]);
                return redirect('admin/categories')->withErrors($allErrors)->withInput();
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->back()->with('success', 'Category deleted successfully');
    }
}
