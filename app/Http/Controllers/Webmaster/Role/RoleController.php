<?php

namespace App\Http\Controllers\Webmaster\Role;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Webmaster\Role\RoleRequest;

class RoleController extends Controller
{
    public function index()
    {
        $this->seo()->setTitle('نقش ها');

        $roles = Role::latest()->paginate(10);
        return view('webmaster.roles.all', compact('roles'));
    }

    public function create()
    {
        $this->seo()->setTitle('ثبت نقش جدید');

        $permissions = Permission::latest()->get();
        return view('webmaster.roles.create', compact('permissions'));
    }

    public function store(RoleRequest $request)
    {
        $role = Role::create($request->all());
        $role->syncPermissions($request->permissions);

        return redirect()->route('webmaster.roles.index')->with('success', 'نقش مورد نظر با موفقیت ایجاد شد.');
    }

    public function show(Role $role)
    {
        $this->seo()->setTitle('جزییات نقش');

        return view('webmaster.roles.show', compact('role'));
    }

    public function edit(Role $role)
    {
        $this->seo()->setTitle('ویرایش نقش');

        $permissions = Permission::latest()->get();

        // {{  in_array($permission->id, $role->permissions->pluck('id')->toArray()) ? 'selected': '' }}

        return view('webmaster.roles.edit', compact('role', 'permissions'));
    }


    public function update(Request $request, Role $role)
    {
        $role->update($request->all());
        $role->syncPermissions($request->permissions);

        return redirect()->route('webmaster.roles.index')->with('success', 'نقش مورد نظر با موفقیت ویرایش شد.');
    }

    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('webmaster.roles.index')->with('success', 'نقش مورد نظر با موفقیت حذف شد.');
    }
}
