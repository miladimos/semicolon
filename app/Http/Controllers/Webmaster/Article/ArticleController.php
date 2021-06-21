<?php

namespace App\Http\Controllers\Webmaster\Article;

use App\Models\User;
use App\Models\Tag;
use App\Models\Article;
use App\Models\Category;
use App\Jobs\CreateArticle;
use App\Jobs\DeleteArticle;
use Illuminate\Http\Request;
use App\Policies\ArticlePolicy;
use App\Http\Controllers\Controller;
use App\Http\Requests\Webmaster\Article\ArticleRequest;

class ArticleController extends Controller
{

    public function index()
    {
        $this->seo()->setTitle('مقالات');

        $articles = Article::latest()->paginate(10);
        return view('webmaster.articles.all', compact('articles'));
    }

    public function create()
    {
        $this->seo()->setTitle('ایجاد مقاله جدید');

        $tags = Tag::all();
        $categories = Category::all();
        // $authors = User::hasRole(['author'])->get();
        $authors = User::all();
        return view('webmaster.articles.create', compact(['tags', 'categories', 'authors']));
    }

    public function store(Request $request)
    {
        $article_thumbnail = $request->thumbnail_path->store('/articles/thumbnails', 'public');
        $file_path = $request->file_path->store('/articles/files', 'public');


        $author_id = null;
        if ($request->has('imauthor')) {
            $author_id = auth()->id();
        } else {
            $author_id = $request->author_id;
        }

        $data = [
            'author_id' => $author_id,
            'title' => $request->title,
            'description' => $request->description,
            'body' => $request->body,
            'status' => $request->status,
            'draft' => $request->draft,
            'pinned' => $request->pinned,
            'published_at' => $request->published_at,
            'thumbnail_path' => $article_thumbnail,
            'active' => $request->active ? true : false,
        ];

        $article = Article::create($data);
        $article->tags()->sync($request->tags);
        $article->categories()->sync($request->categories);

        return redirect()->route('webmaster.articles.index')->with('success', 'مقاله مورد نظر با موفقیت ایجاد شد.');
    }

    public function stor2e(ArticleRequest $request)
    {
        $article = $this->dispatchNow(CreateArticle::fromRequest($request));

        $this->success($request->shouldBeSubmitted() ? 'articles.submitted' : 'articles.created');

        return redirect()->route('articles.show', $article->slug());
    }

    public function show(Article $article)
    {
        $this->seo()->setTitle('جزییات مقاله ');

        return view('webmaster.articles.show', compact('article'));
    }

    public function edit(Article $article)
    {
        $this->seo()->setTitle('ویرایش مقاله');

        $tags = Tag::all();
        $categories = Category::all();
        return view('webmaster.articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $article->update($request->only('title', 'description'));
        return redirect()->route('webmaster.articles.index')->with('success', 'مقاله مورد نظر با موفقیت ویرایش شد.');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('webmaster.articles.index')->with('success', 'مقاله مورد نظر با موفقیت حذف شد.');
    }

    public function togglePinnedStatus(Article $article)
    {
        $this->authorize(ArticlePolicy::PINNED, $article);

        $article->is_pinned = !$article->isPinned();
        $article->save();

        $this->success($article->isPinned() ? 'admin.articles.pinned' : 'admin.articles.unpinned');

        return redirect()->route('articles.show', $article->slug());
    }


    public function delete(Article $article)
    {
        $this->authorize(ArticlePolicy::DELETE, $article);

        $this->dispatchNow(new DeleteArticle($article));

        $this->success('articles.deleted');

        return redirect()->route('articles');
    }

    public function approve(Article $article)
    {
        $this->authorize(ArticlePolicy::APPROVE, $article);

        $this->dispatchNow(new ApproveArticle($article));

        $this->success('admin.articles.approved', $article->title());

        return redirect()->route('articles.show', $article->slug());
    }

    public function disapprove(Article $article)
    {
        $this->authorize(ArticlePolicy::DISAPPROVE, $article);

        $this->dispatchNow(new DisapproveArticle($article));

        $this->success('admin.articles.disapproved', $article->title());

        return redirect()->route('articles.show', $article->slug());
    }
}
