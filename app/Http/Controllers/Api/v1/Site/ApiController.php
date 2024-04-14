<?php

namespace App\Http\Controllers\Api\v1\Site;

use App\Models\Faq;
use App\Models\Job;
use App\Models\Book;
use App\Models\City;
use App\Models\Post;
use App\Models\Grade;
use App\Models\Course;
use App\Models\IrBank;
use App\Models\Contact;
use App\Models\Episode;
use App\Models\Podcast;
use App\Models\Product;
use App\Models\Language;
use App\Models\Province;
use App\Models\Education;
use App\Models\Discussion;
use App\Models\Achievement;
use App\Enums\ModelTypeEnum;
use App\Models\AcquaintedUs;
use Illuminate\Http\Request;
use App\Models\TicketSubject;
use App\Models\ContactSubject;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use App\Http\Requests\ContactUsRequest;
use Illuminate\Support\Facades\Response;
use App\Http\Resources\Faq\FaqCollection;
use App\Http\Resources\City\CityCollection;
use App\Http\Controllers\Api\ApiBaseController;
use App\Http\Resources\IrBank\IrBankCollection;
use App\Http\Resources\Language\LanguageCollection;
use App\Http\Resources\Province\ProvinceCollection;
use App\Http\Resources\Achievement\AchievementCollection;
use App\Http\Resources\AcquaintedUs\AcquaintedUsCollection;
use App\Http\Resources\TicketSubject\TicketSubjectCollection;
use App\Models\Game;
use App\Models\Tag;
use Symfony\Component\HttpFoundation\Response as HttpResponse;

class ApiController extends ApiBaseController
{
    public function banks()
    {
        $banks = IrBank::get();

        return new IrBankCollection($banks);
    }

    public function provinces()
    {
        $provinces = Cache::rememberForever('provinces', function () {
            return Province::get();
        });

        return new ProvinceCollection($provinces);
    }

    public function cities()
    {
        $cities = Cache::rememberForever('cities', function () {
            return City::get();
        });

        return new CityCollection($cities);
    }

    public function citiesOfProvince(Province $province)
    {
        $cities = $province->cities;

        return new CityCollection($cities);
    }

    public function faqs()
    {
        $faqs = Cache::rememberForever('faqs', function () {
            return Faq::latest()->get();
        });

        return new FaqCollection($faqs);
    }

    public function acquaintedus()
    {
        $acquaintedus = Cache::rememberForever('acquaintedus', function () {
            return AcquaintedUs::latest()->get();
        });

        return new AcquaintedUsCollection($acquaintedus);
    }

    public function achievements()
    {
        $achievements = Cache::rememberForever('achievements', function () {
            return Achievement::latest()->get();
        });

        return new AchievementCollection($achievements);
    }

    public function ticketSubjects()
    {
        $subjects = Cache::rememberForever('subjects', function () {
            return TicketSubject::latest()->get();
        });

        return new TicketSubjectCollection($subjects);
    }

    public function contactSubjects()
    {
        $subjects = Cache::rememberForever('contact_subjects',  function () {
            return ContactSubject::latest()->get();
        });

        return new TicketSubjectCollection($subjects);
    }

    public function contactStore(ContactUsRequest $request)
    {
        Contact::create($request->all());

        Log::info('contact us created');
        return rJson('contact us created', 'contacts', true, HttpResponse::HTTP_CREATED);
    }

    public function educations()
    {
        $educations = Cache::rememberForever('educations', function () {
            return Education::latest()->get();
        });

        return new TicketSubjectCollection($educations);
    }

    public function grades()
    {
        $grades = Cache::rememberForever('grades', function () {
            return Grade::latest()->get();
        });

        return new TicketSubjectCollection($grades);
    }

    public function search()
    {
        $search = trim(request()->get('query'));

        $courses = Course::search($search)->latest()->get();
        $episodes = Episode::search($search)->latest()->get();
        $books = Book::search($search)->latest()->get();
        $discussions = Discussion::search($search)->latest()->get();
        $podcasts = Podcast::search($search)->latest()->get();
        $jobs = Job::search($search)->latest()->get();
        $products = Product::search($search)->latest()->get();
        $posts = Post::search($search)->latest()->get();

        $data = [
            'courses' => $courses,
            'episodes' => $episodes,
            'books' => $books,
            'discussions' => $discussions,
            'podcasts' => $podcasts,
            'jobs' => $jobs,
            'products' => $products,
            'posts' => $posts,
        ];

        return Response::rJson($data);
    }

    public function bookLanguages()
    {
        $languages = Language::latest()->get();

        return new LanguageCollection($languages);
    }

    public function likeOfType(Request $request)
    {
        $type = $request->type;
        $uuid = $request->uuid;

        $types = [
            'a' => 'product',
            'b' => 'book',
            'c' => 'podcast',
            'd' => 'game',
            'e' => 'course',
            'f' => 'episode',
        ];

        if (!key_exists($type, $types)) {
            return rJson("invalid type", 'error', 'false', HttpResponse::HTTP_NOT_FOUND);
        }

        switch ($type) {
            case ModelTypeEnum::PRODUCT:
                $model = Product::where('uuid', $uuid)->first();
                if (!$model) {
                    return rJson("model not found", 'error', 'false', HttpResponse::HTTP_NOT_FOUND);
                }
                break;
            case ModelTypeEnum::BOOK:
                $model = Book::where('uuid', $uuid)->first();
                if (!$model) {
                    return rJson("model not found", 'error', 'false', HttpResponse::HTTP_NOT_FOUND);
                }
                break;
            case ModelTypeEnum::PODCAST:
                $model = Podcast::where('uuid', $uuid)->first();
                if (!$model) {
                    return rJson("model not found", 'error', 'false', HttpResponse::HTTP_NOT_FOUND);
                }
                break;
            case ModelTypeEnum::GAME:
                $model = Game::where('uuid', $uuid)->first();
                if (!$model) {
                    return rJson("model not found", 'error', 'false', HttpResponse::HTTP_NOT_FOUND);
                }
                break;
            case ModelTypeEnum::COURSE:
                $model = Course::where('uuid', $uuid)->first();
                if (!$model) {
                    return rJson("model not found", 'error', 'false', HttpResponse::HTTP_NOT_FOUND);
                }
                break;
            case ModelTypeEnum::EPISODE:
                $model = Episode::where('uuid', $uuid)->first();
                if (!$model) {
                    return rJson("model not found", 'error', 'false', HttpResponse::HTTP_NOT_FOUND);
                }
                break;

            default:
                return rJson("invalid type", 'error', 'false', HttpResponse::HTTP_NOT_FOUND);
                break;
        }

        $model->likeBy(Auth::user());
        return rJson('liked');
    }

    public function likesOfType(Request $request)
    {
        $type = $request->type;
        $uuid = $request->uuid;

        $types = [
            'a' => 'product',
            'b' => 'book',
            'c' => 'podcast',
            'd' => 'game',
            'e' => 'course',
            'f' => 'episode',
        ];

        if (!key_exists($type, $types)) {
            return rJson("invalid type", 'error', 'false', HttpResponse::HTTP_NOT_FOUND);
        }

        switch ($type) {
            case ModelTypeEnum::PRODUCT:
                $model = Product::where('uuid', $uuid)->first();
                if (!$model) {
                    return rJson("model not found", 'error', 'false', HttpResponse::HTTP_NOT_FOUND);
                }
                break;
            case ModelTypeEnum::BOOK:
                $model = Book::where('uuid', $uuid)->first();
                if (!$model) {
                    return rJson("model not found", 'error', 'false', HttpResponse::HTTP_NOT_FOUND);
                }
                break;
            case ModelTypeEnum::PODCAST:
                $model = Podcast::where('uuid', $uuid)->first();
                if (!$model) {
                    return rJson("model not found", 'error', 'false', HttpResponse::HTTP_NOT_FOUND);
                }
                break;
            case ModelTypeEnum::GAME:
                $model = Game::where('uuid', $uuid)->first();
                if (!$model) {
                    return rJson("model not found", 'error', 'false', HttpResponse::HTTP_NOT_FOUND);
                }
                break;
            case ModelTypeEnum::COURSE:
                $model = Course::where('uuid', $uuid)->first();
                if (!$model) {
                    return rJson("model not found", 'error', 'false', HttpResponse::HTTP_NOT_FOUND);
                }
                break;
            case ModelTypeEnum::EPISODE:
                $model = Episode::where('uuid', $uuid)->first();
                if (!$model) {
                    return rJson("model not found", 'error', 'false', HttpResponse::HTTP_NOT_FOUND);
                }
                break;

            default:
                return rJson("invalid type", 'error', 'false', HttpResponse::HTTP_NOT_FOUND);
                break;
        }

        return rJson($model->likes);
    }
}
