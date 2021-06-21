<?php

namespace App\Http\Controllers\Webmaster\Backup;

use App\Models\Backup;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;

class BackupController extends Controller
{

    public function index()
    {
        $this->seo()->setTitle('پشتیبان گیر');

        $backups = Backup::latest()->paginate(10);
        return view('webmaster.backups.all', compact('backups'));
    }

    public function create()
    {
        $this->seo()->setTitle('ایجاد پشتیبانی');

        return view('webmaster.backups.create');
    }


    public function store(Request $request)
    {

        if ($request->type === 'all') {
            Artisan::call('php artisan backup:run');
            $backup = Backup::create([
                'type' => 'all',
            ]);
        } elseif ($request->type === 'db') {
            Artisan::call('php artisan backup:run --only-db');
            $backup = Backup::create([
                'type' => 'db',
            ]);
        } elseif ($request->type === 'code') {
            Artisan::call('php artisan backup:run --only-files');
            $backup = Backup::create([
                'type' => 'code',
            ]);
        }



        return redirect()->route('webmaster.backups.index')->with('success', 'پشتیبانی مورد نظر با موفقیت ایجاد شد.');
    }

    public function show(Backup $backup)
    {
        return view('webmaster.backups.show', compact('backup'));
    }

    public function edit(Backup $backup)
    {
        $this->seo()->setTitle('ویرایش پشتیبانی');

        return view('webmaster.backups.edit', compact('backup'));
    }

    public function update(Request $request, Backup $backup)
    {
        $backup->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'active' => $request->boolean('active')
        ]);
        return redirect()->route('webmaster.backups.index')->with('success', 'پشتیبانی مورد نظر با موفقیت ویرایش شد.');
    }

    public function destroy(Backup $backup)
    {
        $backup->delete();
        return redirect()->route('webmaster.backups.index')->with('success', 'پشتیبانی مورد نظر با موفقیت حذف شد.');
    }
}
