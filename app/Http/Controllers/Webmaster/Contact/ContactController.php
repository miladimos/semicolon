<?php

namespace App\Http\Controllers\Webmaster\Contact;

use App\Models\Category;
use App\Models\Tag;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('can:create-contact,user');
            // $this->middleware('can:edit-contact')->only(['edit', 'update']);
    // }

    public function index()
    {
        $this->seo()->setTitle('پیام های تماس با ها');

        $contacts = Contact::latest()->paginate(10);
        return view('webmaster.contacts.all', compact('contacts'));
    }

    public function create()
    {
        $this->seo()->setTitle('ثبت تماس با ما جدید');
        $tags = Tag::all();
        $categories = Category::all();
        return view('webmaster.contacts.create');
    }

    public function store(Request $request)
    {
        $contacts = Contact::create($request->only('title', 'description'));

        return redirect()->route('webmaster.contactss.index')->with('success', 'تماس با ما مورد نظر با موفقیت ایجاد شد.');
    }

    // public function store(SeriesRequest $request)
    // {
    //     $series = $this->dispatchNow(CreateSeries::fromRequest($request));

    //     $this->success('series.created');

    //     return redirect()->route('user.series');
    // }

    public function show(Contact $contact)
    {
        $this->seo()->setTitle('جزییات کشور ');

        return view('webmaster.contries.show', compact('country'));
    }

    public function edit(Contact $contact)
    {
        $this->seo()->setTitle('ویرایش تماس با ما');
        $tags = Tag::all();
        return view('webmaster.contactss.edit', compact('contacts'));
    }

    public function update(Request $request, Contact $contact)
    {
        $contact->update($request->only('title', 'description'));
        return redirect()->route('webmaster.contactss.index')->with('success', 'تماس با ما مورد نظر با موفقیت ویرایش شد.');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('webmaster.contactss.index')->with('success', 'تماس با ما مورد نظر با موفقیت حذف شد.');
    }
}
