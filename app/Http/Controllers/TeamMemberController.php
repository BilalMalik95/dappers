<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class TeamMemberController extends Controller
{
    private function storeUploadedImage(Request $request, string $fieldName, string $directory): ?string
    {
        if (!$request->hasFile($fieldName)) {
            return null;
        }

        $uploadPath = public_path($directory);
        if (!file_exists($uploadPath) && !mkdir($uploadPath, 0755, true) && !is_dir($uploadPath)) {
            throw new \RuntimeException("Could not create upload directory: {$uploadPath}. Check folder permissions on the server.");
        }

        $image = $request->file($fieldName);
        $filenameWithoutExtension = Str::beforeLast($image->getClientOriginalName(), '.');
        $imageSlug = Str::slug($filenameWithoutExtension);
        $imageName = $imageSlug . '-' . time() . '.' . $image->extension();
        $image->move($uploadPath, $imageName);

        if (!file_exists($uploadPath . DIRECTORY_SEPARATOR . $imageName)) {
            throw new \RuntimeException("Image upload appeared to succeed but the file is missing at {$uploadPath}. Check folder write permissions on the server.");
        }

        return $imageName;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teamMembers = TeamMember::ordered()->get();
        return view('admin.team-members.index', compact('teamMembers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.team-members.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'status' => 'required|in:0,1',
            'is_founder' => 'required|in:0,1',
            'is_placeholder' => 'required|in:0,1',
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:team_members,slug',
            'designation' => 'required|string|max:255',
            'experience' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,webp,svg,png,jpg,gif|max:5120',
            'bio' => 'nullable|string',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:50',
            'linkedin' => 'nullable|url|max:255',
            'github' => 'nullable|url|max:255',
            'website' => 'nullable|url|max:255',
            'skills' => 'nullable|string',
            'sort_order' => 'nullable|integer',
        ]);

        if ($validator->fails()) {
            return redirect('admin/team-members/create')
                ->withErrors($validator)
                ->withInput();
        }

        DB::beginTransaction();

        try {
            $member = new TeamMember();
            $member->name = $request->name;
            $member->slug = $request->slug;
            $member->designation = $request->designation;
            $member->experience = $request->experience;
            $member->bio = $request->bio;
            $member->email = $request->email;
            $member->phone = $request->phone;
            $member->linkedin = $request->linkedin;
            $member->github = $request->github;
            $member->website = $request->website;
            $member->skills = $request->skills;
            $member->is_founder = $request->is_founder;
            $member->is_placeholder = $request->is_placeholder;
            $member->sort_order = $request->sort_order ?? 0;
            $member->status = $request->status;
            $member->image = $this->storeUploadedImage($request, 'image', 'frontend/assets/images/team') ?? '';
            $member->save();
            DB::commit();

            return redirect('admin/team-members')->with('success', 'Team member added successfully');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('team member store: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to create team member. ' . $e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teamMember = TeamMember::findOrFail($id);
        return view('admin.team-members.update', compact('teamMember'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'team_member_id' => 'required|integer',
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:team_members,slug,' . $request->team_member_id,
            'designation' => 'required|string|max:255',
            'experience' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,webp,svg,png,jpg,gif|max:5120',
            'bio' => 'nullable|string',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:50',
            'linkedin' => 'nullable|url|max:255',
            'github' => 'nullable|url|max:255',
            'website' => 'nullable|url|max:255',
            'skills' => 'nullable|string',
            'sort_order' => 'nullable|integer',
            'status' => 'required|in:0,1',
            'is_founder' => 'required|in:0,1',
            'is_placeholder' => 'required|in:0,1',
        ]);

        if ($validator->fails()) {
            return redirect('admin/team-members/edit/' . $request->team_member_id)
                ->withErrors($validator)
                ->withInput();
        }

        DB::beginTransaction();
        try {
            $member = TeamMember::findOrFail($request->team_member_id);
            $member->name = $request->name;
            $member->slug = $request->slug;
            $member->designation = $request->designation;
            $member->experience = $request->experience;
            $member->bio = $request->bio;
            $member->email = $request->email;
            $member->phone = $request->phone;
            $member->linkedin = $request->linkedin;
            $member->github = $request->github;
            $member->website = $request->website;
            $member->skills = $request->skills;
            $member->is_founder = $request->is_founder;
            $member->is_placeholder = $request->is_placeholder;
            $member->sort_order = $request->sort_order ?? 0;
            $member->status = $request->status;

            if ($request->hasFile('image')) {
                $member->image = $this->storeUploadedImage($request, 'image', 'frontend/assets/images/team') ?? $request->old_image;
            } elseif ($request->boolean('remove_image')) {
                $member->image = '';
            } elseif ($request->filled('old_image')) {
                $member->image = $request->old_image;
            }

            $member->save();
            DB::commit();

            return redirect('admin/team-members')->with('success', 'Team member updated successfully');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('team member update: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Update failed. ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        TeamMember::findOrFail($id)->delete();

        return redirect('admin/team-members')->with('success', 'Team member deleted successfully');
    }
}
