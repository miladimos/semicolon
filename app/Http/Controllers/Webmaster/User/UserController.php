<?php

namespace App\Http\Controllers\Webmaster\User;

use App\Models\Role;
use App\Models\User;
use App\Exports\UsersExport;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Http\Requests\Webmaster\User\UserRequest;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{

    public function index()
    {
        $this->seo()->setTitle('کاربران');

        // $date = Carbon::now()->subDays(7);

        // $users = User::where('created_at', '>=', $date)->get();

        $users = User::query();

        if ($keyword = request('search')) {
            $users->where('email', 'LIKE', "%$keyword%")
                ->orWhere('name', 'LIKE', "%$keyword%")
                ->orWhere('phone', 'LIKE', "%$keyword%");
        }

        if (request('admin')) {
            $users->where('admin', 1);
        }

        // request()->fullUrlWithQuery(['admin'=>1]);
        // $users = $users->latest()->paginate(20)->appends( ['search' => request('search') ]);
        $users = $users->latest()->paginate(10);
        return view('webmaster.users.index', compact('users'));
    }
    // public function index()
    // {
    //     $search = request('search');
    //     $users = $search ? SearchUsers::get($search) : User::findAllPaginated();

    //     return view('admin.overview', compact('users', 'search'));
    // }

    public function create()
    {
        $this->seo()->setTitle('ثبت کاربر جدید');
        $roles = Role::latest()->get();
        // get_defined_vars();
        return view('webmaster.users.create', compact('roles'));
    }

    public function store(UserRequest $request)
    {
        $user = User::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'active' => $request->boolean('active'),
        ]);

        if ($request->has('active')) {
            $user->markEmailAsVerified();
        }

        $user->syncRoles($request->roles);

        return redirect()->route('admin.users')->with('success', 'کاربر مورد نظر ایجاد شد.');
    }

    public function show(User $user)
    {
        $this->seo()->setTitle('اطلاعات کاربر');

        return view('webmaster.users.show', compact('user'));
    }

    public function edit(User $user)
    {
        $this->seo()->setTitle('ویرایش کاربر');
        $roles = Role::latest()->get();
        return view('webmaster.users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'email' => ['required', 'email', 'string', 'max:255', Rule::unique('users')->ignore($user->id)],
            'username' => ['required', 'string', 'max:255', Rule::unique('users')->ignore($user->id)],
            'roles' => ['required', 'array',],
        ]);


        if (!is_null($request->password)) {
            $request->validate([
                'password' => ['required', 'confirmed', 'min:8', 'max:255'],
            ]);

            $data['password'] = $request->password;
        }

        if (!is_null($request->fname) || !is_null($request->lname)) {
            $d = $request->validate([
                'fname' => ['nullable', 'min:3', 'max:255'],
                'lname' => ['nullable', 'min:3', 'max:255'],
            ]);

            $user->profile()->update($d);
        }

        $user->update($data);

        if ($request->has('active')) {
            $user->markEmailAsVerified();
        }

        $user->syncRoles($request->roles);

        return redirect()->route('webmaster.users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('admin.users');
    }

    public function export()
    {
        return Excel::download(new UsersExport(), 'users.xlsx');
    }
}
