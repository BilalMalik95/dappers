<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('frontend.landing');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'nullable',
            'website' => 'nullable',
            'message' => 'nullable',
            'g-recaptcha-response' => 'required'
        ]);

        // ✅ VERIFY RECAPTCHA (YOU MISSED THIS PART)
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => env('RECAPTCHA_SECRET_KEY'),
            'response' => $request->input('g-recaptcha-response'),
            'remoteip' => $request->ip(),
        ]);

        $responseBody = $response->json();

        // ✅ STRICT VALIDATION
        if (!isset($responseBody['success']) || $responseBody['success'] !== true) {
            return back()
                ->withErrors(['captcha' => 'Please verify captcha properly'])
                ->withInput();
        }

        // ✅ SAVE DATA
        Lead::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'website' => $request->website,
            'message' => $request->message,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Saved successfully'
        ]);
    }
}