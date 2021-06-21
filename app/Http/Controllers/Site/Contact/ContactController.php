<?php

namespace App\Http\Controllers\Site\Contact;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\ContactSubject;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        $this->seo()->setTitle('تماس با ما');

        $subjects = ContactSubject::all();
        return view('site.pages.contact-us', compact('subjects'));
    }

    public function store(Request $request)
    {
        $contact = Contact::create($request->all());

        return redirect()->route('site.contact')->with('success', 'پیام شما ثبت شد و در صورت نیاز با شما تماس گرفته می شود');
    }
}
