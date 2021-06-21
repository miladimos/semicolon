<?php

namespace App\Http\Controllers\Site\Auth;

use Exception;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function handleProviderCallback($provider)
    {
        try {

            $socialiteUser  = $this->getSocialiteUser($provider);

            // dd($socialiteUser);

            $findedUser = User::where('provider_id', $socialiteUser->id)->first();


            // try {
            //     $user = User::findByGithubId($socialiteUser->getId());
            // } catch (ModelNotFoundException $exception) {
            //     return $this->userNotFound(new GithubUser($socialiteUser->getRaw()));
            // }

            // $user = $this->createUser($socialiteUser, $provider);

            if ($findedUser) {

                Auth::login($findedUser, true);

                return redirect()->route('site.home')->with('success', 'با موفقیت وارد شدید');
            } else {
                $newUser = User::create([
                    'username' => $socialiteUser->getNickname(),
                    'email' => $socialiteUser->getEmail(),
                    'email_verified_at' => now(),
                    'active' => 1,
                    'provider' => $provider,
                    'provider_id' => $socialiteUser->getId(),
                    'password' => '12344321',
                ]);

                Auth::login($newUser, true);

                return redirect()->route('site.home');
            }
        } catch (Exception $exc) {
            dd($exc->getMessage());
        }
    }

    function createUser($socialiteUser, $provider)
    {

        $user = User::where('provider_id', $socialiteUser->id)->first();

        if (!$user) {
            $newUser = User::create([
                'username' => $socialiteUser->getNickname(),
                'email' => $socialiteUser->getEmail(),
                'provider' => $provider,
                'provider_id' => $socialiteUser->getId(),
                'password' => '12344321',
            ]);
        }
        return $user;
    }


    private function getSocialiteUser($provider)
    {
        return Socialite::driver($provider)->user();
    }
}
