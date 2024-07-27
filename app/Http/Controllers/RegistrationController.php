<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Validator;
use NoCaptcha;

class RegistrationController extends Controller
{
    public function submitRegistration(Request $request)
    {
        $formData = $request->all();
        $validator = Validator::make($request->all(), [
            // Your other validation rules
            'g-recaptcha-response' => 'required|captcha',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // Send email to the specified address
        Mail::send('emails.Registration', ['data' => $request->all()], function ($message) {
            $message->to('sales@ronesoft.com')
                    ->subject('New Registration');
        });

        return redirect('https://ronesoft.com/')->with('success', 'Registration submitted successfully!');
    }
}
