<?php

namespace App\Http\Controllers\Webmaster\Permission;

use App\Models\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Webmaster\Permission\PermissionRequest;

class PermissionController extends Controller
{

    public function index()
    {
        $this->seo()->setTitle('سطح دسترسی ها');

        $permissions = Permission::latest()->paginate(10);

        return view('webmaster.permissions.all', compact('permissions'));
    }

    public function create()
    {
        $this->seo()->setTitle('ثبت سطح دسترسی جدید');

        return view('webmaster.permissions.create');
    }

    public function store(Request $request)
    {
        // $validated = $request->validated();

        // if ($request->has('crud')) {
        //     // $crudEnItems = ['index', 'create', 'show', 'update', 'delete'];
        //     // $crudFaItems = ['همه', 'ایجاد', 'نمایش', 'ویرایش', 'حذف'];
        //     // $enName = 'article';
        //     // $faName = 'مقاله';
        //     // foreach ($crudEnItems as $item) {
        //     //     echo($item . '-' .$enName) . '<br />';
        //     // }
        //     // foreach ($crudFaItems as $item) {
        //     //     echo($item . ' ' .$faName) . '<br />';
        //     // }
        //     // // Permission::create($date);
        //     // die;

        //     $cruds = explode(',', $request->selected_crud);
        //     if(count($cruds) > 0){
        //         foreach($cruds as $c){
        //             $enName = strtolower($c) . '-' . $request->resource;
        //             $label = ucwords($c) . '-' . $request->resource;
        //             $description =  "Allows a user to ". strtoupper($c). ' a ' . ucwords($request->resource);
        //             $permission = Permission::create([

        //             ]);
        //         }
        //     }
        // }

        $permission = Permission::create($request->all());
        // $permission->syncRoles($request->roles);
        return redirect()->route('webmaster.permissions.index')->with('success', 'سطح دسترسی مورد نظر با موفقیت ایجاد شد.');
    }

    public function show(Permission $permission)
    {
        $this->seo()->setTitle('جزییات سطح دسترسی');

        return view('webmaster.permissions.show', compact('permission'));
    }

    public function edit(Permission $permission)
    {
        $this->seo()->setTitle('ویرایش سطح دسترسی');

        return view('webmaster.permissions.edit', compact('permission'));
    }

    public function update(Request $request, Permission $permission)
    {
        $permission->update($request->all());
        // $permission->removeRole($request()->roles);
        return redirect()->route('webmaster.permissions.index')->with('success', 'سطح دسترسی مورد نظر با موفقیت ویرایش شد.');
    }

    public function destroy(Permission $permission)
    {
        $permission->delete();
        return redirect()->route('webmaster.permissions.index')->with('success', 'سطح دسترسی مورد نظر با موفقیت حذف شد.');
    }
}
