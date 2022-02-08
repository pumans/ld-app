<?php

namespace App\Http\Controllers;

use App\Events\EmailSent;
use App\Http\Requests\ContactFormRequest;
use App\Http\Requests\EmailContactFormRequest;
use App\Http\Requests\EmailFormRequest;
use App\Jobs\ContactFormJob;
use App\Jobs\EmailFormlJob;
use App\Jobs\MailFormJob;
use App\Jobs\SendUserEmailJob;
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
        $mail = \App\Models\Mail::create([
            "email" => $request["email"],
            "text"=> $request["text"],
        ]);
        dispatch(new EmailFormlJob($request));
        return redirect(route('contact'));
    }
    public function email_subscribed(EmailFormRequest $request): \Illuminate\Routing\Redirector|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        $mail = \App\Models\Mail::create([
            "email" => $request["email"],
        ]);
        event(new SendUserEmailJob( $mail->email ) );

        return redirect(route('index'));
    }
    public function phone(ContactFormRequest $request): \Illuminate\Routing\Redirector|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        dispatch(new ContactFormJob($request));
        return redirect(route('index'));
    }
}
