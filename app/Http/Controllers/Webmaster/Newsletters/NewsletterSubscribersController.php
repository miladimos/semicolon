<?php

namespace App\Http\Controllers\Webmaster\Newsletters;

use App\Http\Controllers\Controller;
use App\Models\Newsletters;
use Illuminate\Http\Request;

class NewsletterSubscribersController extends Controller
{
    public function index()
    {
        $this->seo()->setTitle('خبرنامه');

        $newsletters = Newsletters::latest()->paginate(10);
        return view('webmaster.newsletters.all', compact('newsletters'));
    }

    public function create()
    {
        $this->seo()->setTitle('ثبت خبرنامه جدید');

        return view('webmaster.newsletters.create');
    }

    public function store(Request $request)
    {
        $newsletter = Newsletters::create($request->only('title', 'description'));

        return redirect()->route('webmaster.newsletters.index')->with('success', 'خبرنامه مورد نظر با موفقیت ایجاد شد.');
    }

    public function show(Newsletters $book)
    {
        //
    }

    public function edit(Newsletters $newsletter)
    {
        $this->seo()->setTitle('ویرایش خبرنامه');

        return view('webmaster.newsletters.edit', compact('newsletter'));
    }

    public function update(Request $request, Newsletters $newsletter)
    {
        $newsletter->update($request->only('title', 'description'));
        return redirect()->route('webmaster.newsletters.index')->with('success', 'خبرنامه مورد نظر با موفقیت ویرایش شد.');
    }

    public function destroy(Newsletters $newsletter)
    {
        $newsletter->delete();
        return redirect()->route('webmaster.newsletters.index')->with('success', 'خبرنامه مورد نظر با موفقیت حذف شد.');
    }
}
