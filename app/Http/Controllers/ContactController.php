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
        Mail::send('emails.contact', ['data' => $data], function ($message) use ($data) {
            $message->to('sales@ronesoft.com')
                    ->subject('Contact Form ');
        });

        return back()->with('success', 'Your message has been sent successfully! We will contact You Soon');
    }
}
