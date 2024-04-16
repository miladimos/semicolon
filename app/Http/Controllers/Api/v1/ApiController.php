<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Faq;
use App\Models\Tag;
use App\Models\Article;
use App\Models\Contact;
use App\Models\Publication;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use App\Http\Requests\ContactUsRequest;
use App\Http\Resources\Tag\TagResource;
use Illuminate\Support\Facades\Response;
use App\Http\Resources\Faq\FaqCollection;
use App\Http\Resources\Tag\TagCollection;
use App\Http\Controllers\Api\ApiBaseController;
use App\Http\Resources\Article\ArticleResource;
use App\Http\Resources\Article\ArticleCollection;
use App\Http\Resources\Publication\PublicationResource;
use App\Http\Resources\Publication\PublicationCollection;
use Symfony\Component\HttpFoundation\Response as HttpResponse;

class ApiController extends ApiBaseController
{

    public function articles()
    {
        $articles = Cache::remember('articles', now()->addMinutes(60), function () {
            return Article::latest()->get();
        });

        return new ArticleCollection($articles);
    }

    public function articleSingle(Article $article)
    {
        $article->increment('view_count');

        return new ArticleResource($article);
    }

    public function publications()
    {
        $publications = Cache::remember('publications', now()->addMinutes(60), function () {
            return Publication::latest()->get();
        });

        return new PublicationCollection($publications);
    }

    public function publicationSingle(Publication $publication)
    {
        return new PublicationResource($publication);
    }

    public function like(Article $article)
    {
        $article->likeBy(Auth::user());
        return rJson('liked');
    }

    public function likes(Article $article)
    {
        return rJson($article->likes);
    }

    public function tags()
    {
        $tags = Cache::remember('tags', now()->addMinutes(15), function () {
            return Tag::latest()->paginate(48);
        });

        return new TagCollection($tags);
    }

    public function tagSingle(Tag $tag)
    {
        return new TagResource($tag);
    }

    public function faqs()
    {
        $faqs = Cache::rememberForever('faqs', function () {
            return Faq::latest()->get();
        });

        return new FaqCollection($faqs);
    }

    public function contactStore(ContactUsRequest $request)
    {
        Contact::create($request->all());

        Log::info('contact us created');
        return rJson('contact us created', 'contacts', true, HttpResponse::HTTP_CREATED);
    }

    public function search()
    {
        $search = trim(request()->get('query'));


        $articles = Article::search($search)->latest()->get();

        $data = [
            'articles' => $articles,
        ];

        return Response::rJson($data);
    }
}
