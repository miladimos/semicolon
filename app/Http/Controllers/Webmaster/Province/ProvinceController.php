<?php

namespace App\Http\Controllers\Webmaster\Province;

use App\Http\Controllers\Controller;
use App\Models\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{

    public function index()
    {
        $this->seo()->setTitle('کتابخانه');

        $provinces = Province::latest()->paginate(10);
        return view('webmaster.provinces.all', compact('provinces'));
    }

    public function create()
    {
        $this->seo()->setTitle('ثبت کتاب جدید');

        return view('webmaster.provinces.create');
    }

    public function store(Request $request)
    {
        $province = Province::create($request->only('title', 'description'));

        return redirect()->route('webmaster.provinces.index')->with('success', 'استان مورد نظر با موفقیت ایجاد شد.');
    }

    public function show(Province $province)
    {
        //
    }

    public function edit(Province $province)
    {
        $this->seo()->setTitle('ویرایش استان');

        return view('webmaster.provinces.edit', compact('province'));
    }

    public function update(Request $request, Province $province)
    {
        $province->update($request->only('title', 'description'));
        return redirect()->route('webmaster.provinces.index')->with('success', 'استان مورد نظر با موفقیت ویرایش شد.');
    }

    public function destroy(Province $province)
    {
        $province->delete();
        return redirect()->route('webmaster.provinces.index')->with('success', 'استان مورد نظر با موفقیت حذف شد.');
    }
}
