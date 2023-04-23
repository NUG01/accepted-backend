<?php

namespace App\Http\Controllers\user;

use App\Enums\UserRoleEnum;
use App\Events\UserPasswordForgot;
use App\Events\UserRegistration;
use App\Http\Controllers\Controller;
use App\Http\Requests\user\EmailVerifyRequest;
use App\Http\Requests\user\LoginRequest;
use App\Http\Requests\user\PasswordForgotRequest;
use App\Http\Requests\user\PasswordRecoverRequest;
use App\Http\Requests\user\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravolt\Facade\Avatar as Avatar;

class AuthController extends Controller
{

    public function login(LoginRequest $request)
    {


        $userVerified = User::where('email', $request->email)->value('email_verified_at');
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password]) && $userVerified != null) {

            $request->session()->regenerate();

            return response()->json(['user' => Auth::user()]);
        }

        if (Auth::user() &&  Auth::user()->email_verified_at == null) {

            return response()->json([
                'error' => __('messages.not_verified'),
            ], 401);
        }



        return response()->json([
            'error' => __('messages.user_doesnt_exist'),
        ], 401);
    }

    public function logout()
    {
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return response()->noContent();
    }




    public function register(RegisterRequest $request)
    {

        $enum = UserRoleEnum::from($request->role);




        $registeredUser = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role_id' =>  $enum,
            'image' =>  env('IMAGE_URL') . '/images/profile/basic-profile.jpeg',
            'verification_code' =>  sha1(time()),
        ]);

        if (!$registeredUser) {
            return response()->noContent(400);
        }


        event(new UserRegistration($registeredUser));

        return response()->noContent();
    }



    public function verifyEmail(EmailVerifyRequest $request)
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
            return response()->json(['error' => __('messages.mail_already_verified')], 400);
        }

        return response()->json(['error' => __('messages.error_occurred')], 400);
    }



    public function sendPasswordResetEmail(PasswordForgotRequest $request)
    {

        $user = User::where('email', strtolower($request->email))->first();

        event(new UserPasswordForgot($user));
        return response()->noContent();
    }



    public function recoverPassword(PasswordRecoverRequest $request)
    {

        $passwordColumn = DB::table('password_reset_tokens')->where('token', $request->token);

        User::where('email', $passwordColumn->first()->email)->update([
            'password' => bcrypt($request->password),
        ]);

        $passwordColumn->delete();
        return response()->noContent(200);
    }
    public function passwordResetValidity(PasswordRecoverRequest $request)
    {

        $passwordColumn = DB::table('password_reset_tokens')->where('token', $request->token)->first();

        if (!$passwordColumn) return response()->noContent(400);

        return response()->noContent();
    }


    private static function role($id)
    {
        if ($id == 1) return 'entrant';
        if ($id == 2) return 'student';
        if ($id == 3) return 'teacher';
    }
}
