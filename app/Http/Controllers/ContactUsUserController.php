<?php

namespace App\Http\Controllers;

use App\Models\ContactUsUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactUsUserController extends Controller
{
    private array $statuses = ['new', 'spam', 'contacted', 'not_contacted'];

    public function index()
    {
        $contactUsers = ContactUsUser::latest()->get();

        return view('admin.contact-us-users.index', compact('contactUsers'));
    }

    public function show(string $id)
    {
        $contactUser = ContactUsUser::findOrFail($id);

        return view('admin.contact-us-users.show', compact('contactUser'));
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'contact_id' => 'required|integer|exists:contact_us_users,id',
            'status' => 'required|in:' . implode(',', $this->statuses),
            'notes' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $contactUser = ContactUsUser::findOrFail($request->contact_id);
        $contactUser->status = $request->status;
        $contactUser->notes = $request->notes;
        $contactUser->save();

        return redirect()->back()->with('success', 'Contact submission updated successfully.');
    }

    public function clearNotes(string $id)
    {
        $contactUser = ContactUsUser::findOrFail($id);
        $contactUser->notes = null;
        $contactUser->save();

        return redirect()->back()->with('success', 'Notes deleted successfully.');
    }

    public function destroy(string $id)
    {
        ContactUsUser::findOrFail($id)->delete();

        return redirect()->route('admin.contact-users.index')->with('success', 'Contact submission deleted successfully.');
    }
}
