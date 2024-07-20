<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function sendMail(Request $request)
{
    try {
        $data = $request->only(['companyName', 'email', 'description']);

        // Send the email
        Mail::send('emails.contact', ['data' => $data], function ($message) {
            $message->to('sales@ronesoft.com')
                    ->subject('New Contact Form');
        });

        // Redirect back with a success message
        return redirect('https://ronesoft.com/')->with('success', 'Form submitted successfully! We will contact you soon.');
    } catch (\Exception $e) {
        // Log the error message
        Log::error('Email could not be sent: ' . $e->getMessage());

        // Redirect back with an error message
        return redirect()->back()->with('error', 'There was an issue submitting your registration. Please try again later.');
    }
}

}
