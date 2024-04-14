<?php

namespace App\Http\Controllers\Api\v1\Site;

use App\Models\Category;
use Illuminate\Support\Facades\Cache;
use App\Http\Controllers\Api\ApiBaseController;
use App\Http\Resources\Category\CategoryResource;
use App\Http\Resources\Category\CategoryCollection;

class CategoryApiController extends ApiBaseController
{
    public function index()
    {
        $categories = Cache::remember('categories', now()->addMinutes(60), function () {
            return Category::latest()->get();
        });

        return new CategoryCollection($categories);
    }

    public function single(Category $category)
    {
        return new CategoryResource($category);
    }
}
