<?php

namespace App\Services;

use App\Models\Post;
use App\Models\TestType;
use App\Models\User;

class GeneralServices
{
  public static function aboutPageQuantities()
  {
    $posts = Post::all()->count();
    $tests = TestType::all()->count();
    $users = User::all()->count();
    $data = [
      'posts_count' => $posts,
      'tests_count' => $tests,
      'users_count' => $users,
    ];

    return $data;
  }
}
