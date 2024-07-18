<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        $request->validate([
            'con_email' => 'required|email',
            'con_name' => 'required|string|max:255',
            'con_message' => 'required|string',
        ]);

        $data = [
            'email' => $request->input('con_email'),
            'name' => $request->input('con_name'),
            'message' => $request->input('con_message')
        ];

        // Send email to the specified address
        Mail::send('emails.contact', ['data' => $data], function ($message) {
            $message->to('sales@ronesoft.com')
                    ->subject('Contact Information');
        });

        return redirect()->back()->with('success', 'Registration submitted successfully.');

    }
}
