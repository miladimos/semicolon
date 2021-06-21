<?php

namespace App\Http\Controllers\Webmaster\Discount;

use App\Models\User;
use App\Models\Course;
use App\Models\Discount;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DiscountController extends Controller
{

    public function index()
    {
        $this->seo()->setTitle('تخفیف ها');

        $discounts = Discount::latest()->paginate(10);
        return view('webmaster.discounts.all', compact('discounts'));
    }

    public function create()
    {
        $this->seo()->setTitle('ثبت تخفیف جدید');

        $courses = Course::latest()->get();
        $users = User::latest()->get();

        return view('webmaster.discounts.create', compact('courses', 'users'));
    }

    public function store(Request $request)
    {
        dd($request->all());
        $data = [
            'title'       => $request->title,
            'description' => $request->description,
            'body'        => $request->body,
            'code'        => $request->code,
            'percent'     => $request->percent,
            'type'        => $request->type,
            'count_use'   => $request->count_use,
            'start_at'    => $request->start_at,
            'end_at'      => $request->end_at,
            'infinity'    => $request->boolean('infinity'),
            'active'      => $request->boolean('active'),
        ];
        $discount = Discount::create($data);

        if (isset($request->users)) {
            $discount->users()->sync($request->users);
        }

        if (isset($request->courses)) {
            $discount->courses()->sync($request->courses);
        }

        return redirect()->route('webmaster.discounts.index')->with('success', 'تخفیف مورد نظر با موفقیت ایجاد شد.');
    }

    public function show(Discount $discount)
    {
        $this->seo()->setTitle('جزییات تخفیف');

        return view('webmaster.discounts.show', compact('discount'));
    }

    public function edit(Discount $discount)
    {
        $this->seo()->setTitle('ویرایش تخفیف');

        $courses = Course::latest()->get();
        $users = User::latest()->get();
        return view('webmaster.discounts.edit', compact('discount', 'courses', 'users'));
    }

    public function update(Request $request, Discount $discount)
    {
        $validated = $request->validate();
        $discount->update($validated);

        isset($validated['courses'])
            ? $discount->courses()->sync($validated['courses'])
            : $discount->courses()->dettach();


        return redirect()->route('webmaster.discounts.index')->with('success', 'تخفیف مورد نظر با موفقیت ویرایش شد.');
    }

    public function destroy(Discount $discount)
    {
        $discount->delete();
        return redirect()->route('webmaster.discounts.index')->with('success', 'تخفیف مورد نظر با موفقیت حذف شد.');
    }
}
