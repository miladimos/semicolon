<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function setting()
    {
        $user = auth()->user();
        return view('site.user.setting.setting', compact('user'));
    }

    public function update(Request $request)
    {
//        return $request->all();

        $user = auth()->user();

        $data = [
            'fname' => $request->fname,
            'lname' => $request->lname,
            'age' => $request->age,
            'bio' => $request->bio,
            'instagram' => $request->instagram,
            'telegram' => $request->telegram,
            'youtube' => $request->youtube,
            'site' => $request->site,
            'atbox' => $request->atbox,
            'facebook' => $request->facebook,
            'github' => $request->github,
            'gitlab' => $request->gitlab,
            'gender' => $request->gender,

        ];

        $user->profile()->update($data);

        return redirect()->route('user.setting');
    }
}
