<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmailContactFormRequest;
use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(){
        return view('pages.contact');
    }
    public function email(EmailContactFormRequest $request){

        Mail::to("pumanmad@gmail.com")->send(new ContactForm( $request->validated() ) );
        return redirect(route('contact'));
    }
}
