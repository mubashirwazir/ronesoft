<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    public function submitRegistration(Request $request)
    {
        $formData = $request->all();

        // Send email to the specified address
        Mail::send('emails.Registration', ['data' => $request->all()], function ($message) {
            $message->to('sales@ronesoft.com')
                    ->subject('New Registration');
        });

        return redirect('https://xchecker.ronesoft.com/Account/Login')->with('success', 'Registration submitted successfully!');
    }
}
