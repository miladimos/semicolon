<?php

namespace App\Http\Controllers\Webmaster\Country;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{

    public function index()
    {
        $this->seo()->setTitle('کشور ها');

        $countries = Country::latest()->paginate(10);
        return view('webmaster.countries.all', compact('countries'));
    }

    public function create()
    {
        $this->seo()->setTitle('ثبت کشور جدید');

        return view('webmaster.countries.create');
    }

    public function store(Request $request)
    {
        $country = Country::create($request->only('title', 'description'));

        return redirect()->route('webmaster.contries.index')->with('success', 'کشور مورد نظر با موفقیت ایجاد شد.');
    }

    public function show(Country $country)
    {
        $this->seo()->setTitle('جزییات کشور ');

        return view('webmaster.contries.show', compact('country'));
    }

    public function edit(Country $country)
    {
        $this->seo()->setTitle('ویرایش کشور');

        return view('webmaster.contries.edit', compact('country'));
    }

    public function update(Request $request, Country $country)
    {
        $country->update($request->only('title'));
        return redirect()->route('webmaster.contries.index')->with('success', 'کشور مورد نظر با موفقیت ویرایش شد.');
    }

    public function destroy(Country $country)
    {
        $country->delete();
        return redirect()->route('webmaster.contries.index')->with('success', 'کشور مورد نظر با موفقیت حذف شد.');
    }
}
