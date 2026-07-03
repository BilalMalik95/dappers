<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use Exception;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service = Service::with('category')->get();
        return view('admin.services.index', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.services.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'status' => 'required|int',
            'index' => 'required|int',
            'slug' => ['required', 'unique:services,slug'],
            'title' => 'required|string',
            'category_id' => 'required|int',
            'image' => 'required|image|mimes:jpeg,webp,svg,png,jpg,gif|max:2048',
            'short_description' => 'required|min:3',
            'description' => 'required|min:3',
            'meta_title' => 'required|min:3',
            'meta_keywords' => 'required|min:3',
            'meta_description' => 'required|min:3',
        ]);
        if ($validator->fails()) {
            // dd($validator);
            return redirect('admin/services/create')
                ->withErrors($validator)
                ->withInput();
        }
        DB::beginTransaction();
        try {
            $service = new Service();

            $service->name = $request->name;
            $service->status = $request->status;
            $service->index = $request->index;
            $service->slug = $request->slug;
            $service->title = $request->title;
            $service->category_id = $request->category_id;
            $service->short_description = $request->short_description;
            $service->description = $request->description;
            $service->meta_title = $request->meta_title;
            $service->meta_keywords = $request->meta_keywords;
            $service->meta_description = $request->meta_description;

            if ($request->hasFile('image')) {
                $uploadPath = public_path('frontend/assets/images/services');
                if (!file_exists($uploadPath)) {
                    mkdir($uploadPath, 0755, true);
                }
                $image = $request->file('image');
                $filenameWithoutExtension = Str::beforeLast($image->getClientOriginalName(), '.');
                $imageSlug = Str::slug($filenameWithoutExtension);
                $imageName = $imageSlug . '-' . time() . '.' . $image->extension();
                $image->move($uploadPath, $imageName);
                $service->image = $imageName;
            }
            $service->save();
            DB::commit();

            return redirect('admin/services')->with('success', 'Service added Successfully');

        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Service store: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to create Service. ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = Service::find($id);
        $categories = Category::all();
        return view('admin.services.update', compact('categories', 'service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $validator = Validator::make($request->all(), [
            'service_id' => 'required|int',
            'name' => 'required|string',
            'status' => 'required|int',
            'index' => 'required|int',
            'slug' => ['required', 'unique:services,slug,' . $request->service_id],
            'title' => 'required|string',
            'category_id' => 'required|int',
            'image' => 'nullable|image|mimes:jpeg,webp,svg,png,jpg,gif|max:2048',
            'old_image' => 'nullable|string',
            'short_description' => 'required|min:3',
            'description' => 'required|min:3',
            'meta_title' => 'required|min:3',
            'meta_keywords' => 'required|min:3',
            'meta_description' => 'required|min:3',
        ]);
        if ($validator->fails()) {
            return redirect('admin/services/edit/' . $request->service_id)
                ->withErrors($validator)
                ->withInput();
        }
        DB::beginTransaction();
        try {

            $service = Service::find($request->service_id);

            $service->name = $request->name;
            $service->status = $request->status;
            $service->index = $request->index;
            $service->slug = $request->slug;
            $service->title = $request->title;
            $service->category_id = $request->category_id;
            $service->short_description = $request->short_description;
            $service->description = $request->description;
            $service->meta_title = $request->meta_title;
            $service->meta_keywords = $request->meta_keywords;
            $service->meta_description = $request->meta_description;

            if ($request->hasFile('image')) {
                $uploadPath = public_path('frontend/assets/images/services');
                if (!file_exists($uploadPath)) {
                    mkdir($uploadPath, 0755, true);
                }
                $image = $request->file('image');
                $filenameWithoutExtension = Str::beforeLast($image->getClientOriginalName(), '.');
                $imageSlug = Str::slug($filenameWithoutExtension);
                $imageName = $imageSlug . '-' . time() . '.' . $image->extension();
                $image->move($uploadPath, $imageName);
                $service->image = $imageName;
            } else {
                $service->image = $request->old_image;
            }
            $service->update();
            DB::commit();

            return redirect('admin/services')->with('success', 'Service Updated Successfully');

        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Service Update: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to Update Service. ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
          $service = Service::find($id);
          $service->delete();
           return redirect('admin/services')->with('success', 'Service Deleted Successfully');
    }
}
