<?php

namespace App\Http\Controllers\Webmaster\Setting;

use App\Http\Controllers\Controller;
use App\Models\Backup;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{

    public function backups()
    {
        $this->seo()->setTitle('پشتیبان گیر');

        $backups = Backup::latest()->paginate(10);
        return view('webmaster.settings.backup', compact('backups'));
    }

    public function create()
    {
        $this->seo()->setTitle('ایجاد پشتیبانی');

        return view('webmaster.settings.create-backup');
    }



    public function store(Request $request)
    {
        $tag = Setting::create([
            'name' => $request->name,
            'active' => $request->boolean('active')
        ]);

        return redirect()->route('webmaster.tags.index')->with('success', 'برچسب مورد نظر با موفقیت ایجاد شد.');
    }

    public function show(Setting $tag)
    {
        return view('webmaster.tags.show', compact('tag'));
    }

    public function edit(Setting $tag)
    {
        $this->seo()->setTitle('ویرایش برچسب');

        return view('webmaster.tags.edit', compact('tag'));
    }

    public function update(Request $request, Setting $tag)
    {
        $tag->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'active' => $request->boolean('active')
        ]);
        return redirect()->route('webmaster.tags.index')->with('success', 'برچسب مورد نظر با موفقیت ویرایش شد.');
    }

    public function destroy(Setting $tag)
    {
        $tag->delete();
        return redirect()->route('webmaster.tags.index')->with('success', 'برچسب مورد نظر با موفقیت حذف شد.');
    }
}
