<?php

namespace App\Http\Controllers\Webmaster\Faq;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{

    public function index()
    {
        $this->seo()->setTitle('سوالات متداول');

        $faqs = Faq::latest()->paginate(10);
        return view('webmaster.faqs.all', compact('faqs'));
    }

    public function create()
    {
        $this->seo()->setTitle('ایجاد متداول جدید');

        return view('webmaster.faqs.create');
    }

    public function store(Request $request)
    {

        $faq = Faq::create($request->only('question', 'answer'));

        return redirect()->route('webmaster.faqs.index')->with('success', 'سوال متداول مورد نظر با موفقیت ایجاد شد.');
    }


    public function show(Faq $faq)
    {
        $this->seo()->setTitle('جزییات سوال متداول');

        return view('webmaster.faqs.show', compact('faq'));
    }

    public function edit(Faq $faq)
    {
        $this->seo()->setTitle('ویرایش سوال متداول');

        return view('webmaster.faqs.edit', compact('faq'));
    }

    public function update(Request $request, Faq $faq)
    {
        $faq->update($request->only('title', 'description'));
        return redirect()->route('webmaster.faqs.index')->with('success', 'سوال متداول مورد نظر با موفقیت ویرایش شد.');
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect()->route('webmaster.faqs.index')->with('success', 'سوال متداول مورد نظر با موفقیت حذف شد.');
    }
}
