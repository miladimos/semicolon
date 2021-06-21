<?php

namespace App\Http\Controllers\Webmaster\Publisher;

use App\Models\Tag;
use App\Models\Publisher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PublisherController extends Controller
{

    public function index()
    {
        $this->seo()->setTitle('انتشارات');

        $publishers = Publisher::latest()->paginate(10);
        return view('webmaster.publishers.all', compact('publishers'));
    }

    public function create()
    {
        $this->seo()->setTitle('ثبت انتشارات جدید');
        return view('webmaster.publishers.create');
    }

    public function store(Request $request)
    {
        $thumbnail_path = null;
        if ($request->hasFile('thumbnail_path'))
            $thumbnail_path = $request->thumbnail_path->store('/books/thumbnails', 'public');

        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'thumbnail_path' => $thumbnail_path,
            'active' => $request->boolean('active'),
        ];

        $publisher = Publisher::create($data);

        return redirect()->route('webmaster.publishers.index')->with('success', 'انتشارات مورد نظر با موفقیت ایجاد شد.');
    }

    public function show(Publisher $publisher)
    {
        return view('webmaster.publishers.show', compact('publisher'));
    }

    public function edit(Publisher $publisher)
    {
        $this->seo()->setTitle('ویرایش انتشارات');
        return view('webmaster.publishers.edit', compact('publisher'));
    }

    public function update(Request $request, Publisher $publisher)
    {
        $publisher->update($request->all());
        return redirect()->route('webmaster.publishers.index')->with('success', 'انتشارات مورد نظر با موفقیت ویرایش شد.');
    }

    public function destroy(Publisher $publisher)
    {
        $publisher->delete();
        return redirect()->route('webmaster.publishers.index')->with('success', 'انتشارات مورد نظر با موفقیت حذف شد.');
    }
}
