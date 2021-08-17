<?php

namespace App\Http\Controllers\Webmaster\Tag;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Tag\TagEloquentRepositoryInterface;

class TagController extends Controller
{

    // private $tagRepo;

    // public function __construct(TagEloquentRepositoryInterface $tagRepo)
    // {
    //     $this->tagRepo = $tagRepo;
    // }

    public function index()
    {
        $this->seo()->setTitle('برچسب ها');
        $tags = $this->tagRepo->all();

        return view('webmaster.tags.all', compact('tags'));
    }

    public function create()
    {
        $this->seo()->setTitle('ثبت برچسب جدید');

        return view('webmaster.tags.create');
    }

    public function store(Request $request)
    {
        $tag = Tag::create([
            'name' => $request->name,
            'active' => $request->boolean('active')
        ]);

        return redirect()->route('webmaster.tags.index')->with('success', 'برچسب مورد نظر با موفقیت ایجاد شد.');
    }

    public function show(Tag $tag)
    {
        return view('webmaster.tags.show', compact('tag'));
    }

    public function edit(Tag $tag)
    {
        $this->seo()->setTitle('ویرایش برچسب');

        return view('webmaster.tags.edit', compact('tag'));
    }

    public function update(Request $request, Tag $tag)
    {
        $tag->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'active' => $request->boolean('active')
        ]);
        return redirect()->route('webmaster.tags.index')->with('success', 'برچسب مورد نظر با موفقیت ویرایش شد.');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('webmaster.tags.index')->with('success', 'برچسب مورد نظر با موفقیت حذف شد.');
    }
}
