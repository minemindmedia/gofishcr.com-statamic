<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormSubmissionController extends Controller
{
    public function handle(Request $request)
    {
        \Log::info('Form Submission Received', $request->all());

        // Validate the request data as needed
        $validated = $request->validate([
            // Your validation rules here
        ]);

        // Perform your logic here. For example, save the data or send an email

        // Determine the redirect URL
        $redirectUrl = '/thank-you'; // Default redirect URL
        if ($request->has('redirect_to')) {
            $redirectUrl = $request->input('redirect_to'); // Or determine based on your logic
        }

        // Return a JSON response with the redirect URL
        return response()->json(['redirect_to' => $redirectUrl]);
    }
}
