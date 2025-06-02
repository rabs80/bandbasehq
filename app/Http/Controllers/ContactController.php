<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Send email or log it (you can replace this with actual Mail::to(...)->send(...) logic)
        Mail::raw("Message from {$validated['name']} ({$validated['email']}):\n\n{$validated['message']}", function ($mail) use ($validated) {
            $mail->to(config('mail.from.address'))
                 ->subject('New Contact Form Submission');
        });

        return back()->with('status', 'Thanks! Your message has been sent.');
    }
}
