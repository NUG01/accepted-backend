<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class NotVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $user = User::where('verification_code', $request->code)->first();
        if (!$user || $user->hasVerifiedEmail()) {
            return response()->json('მომხმარებლის ვერიფიკაცია ვერ მოხერხდა!', 400);
        }
        return $next($request);
    }
}
