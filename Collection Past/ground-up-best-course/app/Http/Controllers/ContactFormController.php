<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store()
    {
        // dd(request()->all()) = name+ email + message
        // dd(request('name'))
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        /*

        php artisan make:mail ContactFormMail --markdown=emails.contact.contact-form

        1. modify $data in app\Mail\ContactFormMail from "private" to "public"
        class ContactFormMail extends Mailable
        {
            ....
            public $data;
            ....
        }
        2. In resources/views/emails.contact.contact-form access $data object easily

                            @component('mail::message')

                            # Thank you for your message
                            <!-- Using the public $data -->
                            <strong>Name</strong> {{ $data['name'] }}
                            <strong>Email</strong> {{ $data['email'] }}
                            <strong>Message</strong>
                            {{ $data['message'] }}

                            @endcomponent

        /*


        */

        Mail::to('test@test.com')->send(new ContactFormMail($data));

        // SENDING SESSION DATA
        /*
        @if(session()->has('message'))
        <div class="alert alert-success" role="alert">
            <strong>Success</strong> {{ session()->get('message') }}
        </div>
        @endif
        */

        // ___________________________________________________________________

        return redirect('contact')
            ->with('message', 'Thanks for your message. We\'ll be in touch.');

            // Alternative syntax to  above
            // session()->flash('message', 'Thanks for your message. We\'ll be in touch.')
            // return redirect('contact')

        // _____________________________________________________________________

    }
}
