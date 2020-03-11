<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $this->authorize('edit-article');
        $articles = Article::latest()->paginate(10);
//        $articles = Article::withTrashed()->get();
        return view('admin.article.all', compact('articles'));
    }

    public function trashed()
    {
        $articles = Article::onlyTrashed()->paginate(20);
        return view('admin.article.trashed', compact('articles'));
    }

    public function restore($id)
    {
        $article = Article::onlyTrashed()->where('id', $id)->first();
        $article->restore();
        return redirect()->route('article.index')->with('success','Article Restored Successfully');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        $categories = Category::all();
        return view('admin.article.create', compact('tags','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
//        return $request->all();
//        $validatedData = Validator::make($request->all(), [
//            'title' => 'required',
//            'description' => 'required',
//            'body' => 'required',
//            'category_id' => 'required',
//            'tags' => 'required',
//            'image_url' => 'required|image|mimes:jpg,png,jpeg'
//        ]);

        $validated = $request->validated();

//        if ($validated->fails()) {
//            return back()->withInput()->withErrors($validatedData->errors())->with('error', 'some inputs value are wrong');
//        }

        if ($request->has('image_url')) {
//            if(Storage::exists('/uploads')) {
//                return "exists";
//            }else {
//                return "not exits";
//            }
//            $imageName = $request->file('image_url')->getClientOriginalName();
//            $fileName = now()->getTimestamp() . $imageName;
            $file = $request->file('image_url');
            $path = storage_path() . '/upload';
            $ext = $file->getClientOriginalExtension();
            $fileName = $file->getClientOriginalName();
            $uploadfile = $fileName . '_' . time() . '.' . $ext;
//            $file->move($path, $fileName);
            $image = Storage::put('/uploads/' . $uploadfile, $request->file('image_url'));

        }
//        $article = Article::create($validatedData->validated());
        $article = auth()->user()->articles()->create($validated);
        if ($request->tags)
            $article->tags()->attach($request->tags);


        return redirect()->route('article.index')->with('success', 'Article Created Successfully');

//        for ($i = 0; $i < count($request->file('file')); $i++)
//        {
//            $file = $request->file('file')[$i];
//            $path = public_path() . '/upload';
//            $ext = $file->getClientOriginalExtention();
//            $fileName = $file->getClientOriginalName();
//            $uploadfile = $fileName . '_' . time() . '.' . $ext;
//            $file->move($path, $fileName);
//        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('article', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $tags = Tag::all();
        $categories = Category::all();
        return view('admin.article.edit', compact('article', 'tags', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        if($request->tags){
            $article->tags()->sync($request->tags);
        }

        $article->update($request->all());

        return redirect()->route('article.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('article.index')->with('success','Article Deleted Successfully');
    }
    public function fdestroy($id)
    {
//        $article = Article::find($article)->first();
        $article = Article::onlyTrashed()->where('id', $id)->first();
        $article->forceDelete();
        return redirect()->route('article.index')->with('success','Article Force Deleted Successfully');
    }
}
