<?php

namespace App\Http\Controllers\Site\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events\Auth\UserLoggedin;
use Illuminate\Support\Facades\Response;
use App\Http\Requests\Auth\LoginRequest;

class LoginController extends Controller
{
    private $username;

    public function __construct()
    {
        $this->username = $this->findUsername();
    }

    public function showLoginForm()
    {
        return view('site.auth.login');
    }

    public function login(LoginRequest $request)
    {
        $user = $this->user($request->username);
        if (!$user) {
            return back()->with('toast_error', 'email / username not exist');
        }

        if (!$this->authenticate($request)) {
            return back()->with('toast_error', 'credentials is incorrect');
        }

        auth()->login($user, $request->remember);

        event(new UserLoggedin($user));

        return Response::success('site.index', 'Login Successfuly.');;
    }

    public function user($username)
    {
        return User::where('email', $username)->orWhere('username', $username)->first();
    }

    public function authenticate($request)
    {
        if (auth()->attempt([$this->username() => $request->username, 'password' => $request->password])) {
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return true;
        }
        return false;
    }

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function findUsername()
    {
        $username = request()->input('username');

        $fieldType = filter_var($username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        request()->merge([$fieldType => $username]);

        return $fieldType;
    }

    /**
     * Get username property.
     *
     * @return string
     */
    public function username()
    {
        return $this->username;
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('site.index');
    }
}
