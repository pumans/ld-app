<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactForm;
use App\Models\Email;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function contact(ContactFormRequest $request){

        Mail::to("pumans@ukr.net")->send(new ContactForm($request->validated()));

    }
}
