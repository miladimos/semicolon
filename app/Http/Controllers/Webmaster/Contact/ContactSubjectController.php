<?php

namespace App\Http\Controllers\Webmaster\Contact;

use App\Http\Controllers\Controller;
use App\Models\ContactSubject;
use Illuminate\Http\Request;

class ContactSubjectController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('can:create-contact,user');
    // $this->middleware('can:edit-contact')->only(['edit', 'update']);
    // }

    public function index()
    {
        $this->seo()->setTitle('موضوع تماس با ما ها');

        $subjects = ContactSubject::latest()->paginate(10);
        return view('webmaster.contact-subjects.all', compact('subjects'));
    }

    public function create()
    {
        $this->seo()->setTitle('ثبت موضوع تماس با ما جدید');

        return view('webmaster.subjects.create');
    }

    public function store(Request $request)
    {
        $subjects = ContactSubject::create($request->only('name', 'active'));

        return redirect()->route('webmaster.contact-subjects.index')->with('success', 'موضوع تماس با ما مورد نظر با موفقیت ایجاد شد.');
    }

    // public function store(SeriesRequest $request)
    // {
    //     $series = $this->dispatchNow(CreateSeries::fromRequest($request));

    //     $this->success('series.created');

    //     return redirect()->route('user.series');
    // }

    public function show(ContactSubject $subject)
    {
        $this->seo()->setTitle('جزییات موضوع تماس با ما ');

        return view('webmaster.contact-subjects.show', compact('country'));
    }

    public function edit(ContactSubject $subject)
    {
        $this->seo()->setTitle('ویرایش موضوع تماس با ما');

        return view('webmaster.contact-subjects.edit', compact('subject'));
    }

    public function update(Request $request, ContactSubject $subject)
    {
        $subject->update($request->only('name', 'active'));
        return redirect()->route('webmaster.contact-subjects.index')->with('success', 'موضوع تماس با ما مورد نظر با موفقیت ویرایش شد.');
    }

    public function destroy(ContactSubject $subject)
    {
        $subject->delete();
        return redirect()->route('webmaster.contact-subjects.index')->with('success', 'موضوع تماس با ما مورد نظر با موفقیت حذف شد.');
    }
}
