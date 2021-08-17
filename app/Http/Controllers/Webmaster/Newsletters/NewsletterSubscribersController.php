<?php

namespace App\Http\Controllers\Webmaster\Newsletters;

use App\Http\Controllers\Controller;
use App\Models\NewsletterSubscriber;
use Illuminate\Http\Request;

class NewsletterSubscribersController extends Controller
{
    public function index()
    {
        $this->seo()->setTitle('مشتریکن خبرنامه');

        $newsletters = NewsletterSubscriber::latest()->paginate(10);
        return view('webmaster.newsletters-subscribers.all', compact('newsletters'));
    }

    public function create()
    {
        $this->seo()->setTitle('ثبت مشتریکن خبرنامه جدید');

        return view('webmaster.newsletters-subscribers.create');
    }

    public function store(Request $request)
    {
        $newsletter = NewsletterSubscriber::create($request->only('title', 'description'));

        return redirect()->route('webmaster.newsletters-subscribers.index')->with('success', 'مشتریکن خبرنامه مورد نظر با موفقیت ایجاد شد.');
    }

    public function show(NewsletterSubscriber $book)
    {
        //
    }

    public function edit(NewsletterSubscriber $newsletter)
    {
        $this->seo()->setTitle('ویرایش مشتریکن خبرنامه');

        return view('webmaster.newsletters-subscribers.edit', compact('newsletter'));
    }

    public function update(Request $request, NewsletterSubscriber $newsletter)
    {
        $newsletter->update($request->only('title', 'description'));
        return redirect()->route('webmaster.newsletters-subscribers.index')->with('success', 'مشتریکن خبرنامه مورد نظر با موفقیت ویرایش شد.');
    }

    public function destroy(NewsletterSubscriber $newsletter)
    {
        $newsletter->delete();
        return redirect()->route('webmaster.newsletters-subscribers.index')->with('success', 'مشتریکن خبرنامه مورد نظر با موفقیت حذف شد.');
    }
}
