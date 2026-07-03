<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;
use Exception;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => 'required|string',
            'role' => 'required|string',
        ]);


        if ($validator->fails()) {
            return redirect('admin/users')
                ->withErrors($validator)
                ->withInput();
        }
        DB::beginTransaction();

        try {

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => $request->role
            ]);

            DB::commit();

            return redirect()->back()->with('success', 'User created successfully');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error while Creating User: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to create User. ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $userID = $request->id;
        $user = User::find($userID);
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
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_name' => 'required|string',
            'user_email' => ['required', 'string', 'email', 'max:255'],
            'user_password' => 'nullable|string',
            'user_role' => 'required|string',
        ]);

        if ($validator->fails()) {
            $customErrors = new MessageBag(['update' => 'Something went wrong while updating.']);

            $allErrors = $validator->errors()->merge($customErrors);
            return redirect('admin/users')
                ->withErrors($allErrors)
                ->withInput();
        }
        DB::beginTransaction();
        try {

            $user = User::find($request->id);
            $user->name = $request->user_name;
            $user->email = $request->user_email;
            $user->role = $request->user_role;

            if (!empty($request->user_password)) {
                $user->password = Hash::make($request->user_password);
            }
            $user->save();
            
            DB::commit();
            return redirect()->back()->with('success', 'User updated successfully');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error while Update User: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to update User. ' . $e->getMessage());
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('success', 'User deleted successfully');
    }
}
