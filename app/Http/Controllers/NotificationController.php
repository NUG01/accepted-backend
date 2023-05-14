<?php

namespace App\Http\Controllers;

use App\Events\NotificationReceived;
use App\Http\Resources\NotificationResource;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Cache\Repository;
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

    public function readAllNotification()
    {
        $unreadIsPresent = Notification::where('seen', null)->first();
        if (!$unreadIsPresent) return response()->noContent();
        $notifications =  Notification::where('user_id', '!=', Auth::user()->id)
            ->whereIn('post_id', Auth::user()->posts->pluck('id'))
            ->latest()->get();

        for ($i = 0; $i < count($notifications); $i++) {
            $notifications[$i]->update(['seen' => 1]);
        }


        return response()->json(NotificationResource::collection($notifications));
    }

    public function readSingleNotification(Notification $notification)
    {
        $notification->seen = 1;
        $notification->save();

        $data = [

            'id' => $notification->id,
            'author' => User::where('id',  $notification->user_id)->get(['name', 'surname', 'image', 'id']),
            'comment_id' => $notification->comment_id,
            'like_id' => $notification->like_id,
            'post_id' => $notification->post_id,
            'created_at' => $notification->created_at,
            'seen' => $notification->seen,
        ];
        return response()->json($data);
    }
}
