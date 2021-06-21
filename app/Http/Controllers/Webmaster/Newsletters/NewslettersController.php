<?php

namespace App\Http\Controllers\Webmaster\Newsletters;

use App\Http\Controllers\Controller;
use App\Models\Newsletters;
use Illuminate\Http\Request;

class NewslettersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->seo()->setTitle('خبرنامه');

        $newsletters = Newsletters::latest()->paginate(10);
        return view('webmaster.newsletters.all', compact('newsletters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->seo()->setTitle('ثبت خبرنامه جدید');

        return view('webmaster.newsletters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newsletter = Newsletters::create($request->only('title', 'description'));

        return redirect()->route('webmaster.newsletters.index')->with('success', 'خبرنامه مورد نظر با موفقیت ایجاد شد.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Newsletters  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Newsletters $book)
    {
        //
    }
 /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Newsletters  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function edit(Newsletters $newsletter)
    {
        $this->seo()->setTitle('ویرایش خبرنامه');

        return view('webmaster.newsletters.edit', compact('newsletter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Newsletters  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Newsletters $newsletter)
    {
        $newsletter->update($request->only('title', 'description'));
        return redirect()->route('webmaster.newsletters.index')->with('success', 'خبرنامه مورد نظر با موفقیت ویرایش شد.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Newsletters  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newsletters $newsletter)
    {
        $newsletter->delete();
        return redirect()->route('webmaster.newsletters.index')->with('success', 'خبرنامه مورد نظر با موفقیت حذف شد.');
    }
}
