<?php

namespace App\Http\Controllers;

use App\Events\NotificationReceived;
use App\Http\Resources\NotificationResource;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function index()
    {

        return NotificationResource::collection(Notification::where('user_id', '!=', Auth::user()->id)
            ->whereIn('post_id', Auth::user()->posts->pluck('id'))
            ->latest()->get());
    }

    public static function createNotification($postId, $comment_id = null, $like_id = null)
    {
        $notification = Notification::create([
            'comment_id' => $comment_id,
            'like_id' => $like_id,
            'post_id' => $postId,
            'user_id' => Auth::user()->id,
            'seen' => null,
            'created_at' => now()
        ]);

        event(new NotificationReceived(['data' => $notification, 'author' => [User::find(Auth::user()->id, ['name', 'surname', 'image', 'id'])]]));
    }
}
