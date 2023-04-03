<?php

namespace App\Http\Controllers\user;

use App\Enums\UserRoleEnum;
use App\Events\UserRegistration;
use App\Http\Controllers\Controller;
use App\Http\Requests\user\RegisterRequest;
use App\Http\Resources\UserCollection;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {

        $enum = UserRoleEnum::from($request->role);

        $registeredUser = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role_id' =>  $enum,
            'verification_code' =>  sha1(time()),
        ]);

        if (!$registeredUser) {
            return response()->noContent()->setStatusCode(400);
        }


        event(new UserRegistration($registeredUser));

        return response()->noContent();
    }

    public function verifyEmail(Request $request)
    {
        $user = User::where('verification_code', $request->code)->first();

        if ($user && $user->email_verified_at == null) {
            $user->markEmailAsVerified();
            Auth::login($user);
            $userData = [
                'name' => $user->name,
                'surname' => $user->surname,
                'email' => $user->email,
                'verified' => $user->email_verified_at ? 'true' : 'false',
                'role' => $this->role($user->role_id),
            ];
            return response()->json($userData);
        }

        if ($user && $user->email_verified_at) {
            return response()->json('მეილი უკვე ვერიფიცირებულია!', 400);
        }

        return response()->json('დაფიქსირდა შეცდომა', 400);
    }


    private static function role($id)
    {
        if ($id == 1) return 'entrant';
        if ($id == 2) return 'student';
        if ($id == 3) return 'teacher';
    }
}