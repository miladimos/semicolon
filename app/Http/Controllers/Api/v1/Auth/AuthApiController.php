<?php

namespace App\Http\Controllers\Api\V1\Auth;

use Illuminate\Auth\Events\Registered;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class AuthApiController extends Controller
{
    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response([
                'message' => 'Invalid'
            ], Response::HTTP_UNAUTHORIZED);
        }

        $user = Auth::user();

        $token = $user->createToken('token')->plainTextToken;

        $cookie = cookie('jwt', $token, 60 * 24);

        return response([
            'message' => 'ok'
        ])->withCookie($cookie);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation failed', $validator->errors(), Response::HTTP_BAD_REQUEST);
        }
        DB::beginTransaction();
        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
            $token = $user->createToken('MOBILE_APP');
            DB::commit();
        } catch (\Exception $e) {
            Log::info($e->getMessage());
            DB::rollBack();
            return $this->sendError('User registration failed', ['error' => $e->getMessage()], Response::HTTP_BAD_REQUEST);
        }
        if (!is_null($user) && !is_null($token)) {
            event(new Registered($user));
            return $this->sendResponse('User created', ['token' => $token->plainTextToken]);
        }
    }

    public function logout(Request $request)
    {
        $cookie = cookie()->forget('jwt');
        return response([
            'message' => 'ok'
        ]);
    }

    public function current()
    {
        $user = Auth::user();
        return $user;
    }
}
