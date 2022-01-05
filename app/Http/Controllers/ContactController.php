<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Http\Requests\EmailContactFormRequest;
use App\Http\Requests\EmailFormRequest;
use App\Mail\ContactForm;
use App\Mail\EmailForm;
use App\Mail\PhoneForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(){
        return view('pages.contact');
    }
    public function email(EmailContactFormRequest $request): \Illuminate\Routing\Redirector|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        Mail::to("pumanmad@gmail.com")->send(new ContactForm( $request->validated() ) );
        return redirect(route('contact'));
    }
    public function email_subscribed(EmailFormRequest $request): \Illuminate\Routing\Redirector|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        $mail = \App\Models\Mail::create([
            "email" => $request["email"],
        ]);

        Mail::to($mail)->send(new EmailForm( $request->validated() ) );
        return redirect(route('index'));
    }
    public function phone(ContactFormRequest $request): \Illuminate\Routing\Redirector|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        Mail::to("pumanmad@gmail.com")->send(new PhoneForm( $request->validated() ) );
        return redirect(route('index'));
    }
}
