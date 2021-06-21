<?php

namespace App\Http\Controllers\Webmaster\City;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{

    public function index()
    {
        $this->seo()->setTitle('کتابخانه');

        $cities = City::latest()->paginate(10);
        return view('webmaster.citys.all', compact('cities'));
    }

    public function create()
    {
        $this->seo()->setTitle('ثبت کتاب جدید');

        return view('webmaster.cities.create');
    }

    public function store(Request $request)
    {
        $city = City::create($request->only('title', 'description'));

        return redirect()->route('webmaster.cities.index')->with('success', 'شهر مورد نظر با موفقیت ایجاد شد.');
    }

    public function show(City $city)
    {
        $this->seo()->setTitle('جزییات شهر ');

        return view('webmaster.cities.show', compact('city'));
    }

    public function edit(City $city)
    {
        $this->seo()->setTitle('ویرایش شهر');

        return view('webmaster.cities.edit', compact('city'));
    }

    public function update(Request $request, City $city)
    {
        $city->update($request->only('title', 'description'));
        return redirect()->route('webmaster.cities.index')->with('success', 'شهر مورد نظر با موفقیت ویرایش شد.');
    }
    
    public function destroy(City $city)
    {
        $city->delete();
        return redirect()->route('webmaster.cities.index')->with('success', 'شهر مورد نظر با موفقیت حذف شد.');
    }
}
