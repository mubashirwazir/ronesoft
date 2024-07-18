<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class ProcurementRegistrationController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the form data
        $request->validate([
            'companyName' => 'required|string|max:255',
            'businessAddress' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'postalCode' => 'required|string|max:20',
            'country' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'companyWebsite' => 'nullable|url|max:255',
            'description' => 'required|string',
            'userFirstName' => 'required|string|max:255',
            'userLastName' => 'required|string|max:255',
            'userEmail' => 'required|email|max:255',
        ]);

        try {
            // Send the email
            Mail::send('emails.ProcurementRegistration', ['data' => $request->all()], function ($message) {
                $message->to('khadijanawaz8302@gmail.com')
                        ->subject('New Procurement Registration');
            });

            // Redirect back with a success message
            return redirect('https://xchecker.ronesoft.com/Account/Login')->with('success', 'Registration submitted successfully.');
        } catch (\Exception $e) {
            // Log the error message
            Log::error('Email could not be sent: ' . $e->getMessage());

            // Redirect back with an error message
            return redirect()->back()->with('error', 'There was an issue submitting your registration. Please try again later.');
        }
    }
}
