<?php

namespace App\Http\Controllers\Site\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events\Site\Auth\UserLoggedin;
use App\Http\Requests\Site\Auth\LoginRequest;

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

        return redirect()->route('site.index')->with('success');
    }

    public function user($email)
    {
        return User::where('email', $email)->orWhere('username', $email)->first();
    }

    public function authenticate($request)
    {
        if (auth()->attempt([$this->username() => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
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
