<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Http\Requests\user\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

  public function user(Request $request)
  {
    return response()->json(['user' => $request->user()]);
  }

  public function edit(UpdateUserRequest $request, User $user)
  {
    $path = $user->image;
    if ($request->file('image')) $path = $request->file('image')->store('thumbnails');

    $user->update([
      'name' => $request->name,
      'surname' => $request->surname,
      'image' => $path
    ]);
    return response()->json([Auth::user()]);
  }

  public function editPassword(Request $request)
  {
    $validatedData = $request->validate([
      'current_password' => ['required', 'min:6', 'current_password:sanctum'],
      'password_confirmation' => ['required', 'same:current_password'],
      'new_password' => ['required', 'min:8'],
    ]);

    Auth::user()->update([
      'password' => bcrypt($validatedData['new_password'])
    ]);
    return response()->noContent();
  }
}
