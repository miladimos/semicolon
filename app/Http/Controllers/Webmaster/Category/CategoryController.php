<?php

namespace App\Http\Controllers\Webmaster\Category;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class CategoryController extends Controller
{

    public function index()
    {
        $this->seo()->setTitle('دسته بندی ها');

        $categories = Category::latest()->paginate(10);

        return view('webmaster.categories.all', compact('categories'));
    }

    public function create()
    {
        $this->seo()->setTitle('ثبت دسته بندی جدید');

        $categories = Category::latest()->get();

        return view('webmaster.categories.create', compact('categories'));
    }

    public function store(Request $request)
    {

        $category = Category::create([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'active' => $request->boolean('active') ? true : false,
            'description' => $request->description,
        ]);

        return redirect()->route('webmaster.categories.index')->with('success', 'دسته بندی مورد نظر با موفقیت ایجاد شد.');
    }

    public function show(Category $category)
    {
        return view('webmaster.categories.show', compact('category'));
    }

    public function edit(Category $category)
    {
        $this->seo()->setTitle('ویرایش دسته بندی');

        $categories = Category::where('id', '!=', $category->id)->get();

        return view('webmaster.categories.edit', compact('category', 'categories'));
    }
    public function update(Request $request, Category $category)
    {
        $category->update([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'active' => $request->boolean('active') ? true : false,
            'description' => $request->description,
        ]);

        return redirect()->route('webmaster.categories.index')->with('success', 'دسته بندی مورد نظر با موفقیت ویرایش شد.');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json([
            'message' => 'عملیات موفقیت آمیز بود'
        ], Response::HTTP_OK);
        // return redirect()->route('webmaster.categories.index')->with('success', 'دسته بندی مورد نظر با موفقیت حذف شد.');
    }
}
