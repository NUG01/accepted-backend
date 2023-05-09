<?php

namespace App\Http\Controllers;

use App\Http\Resources\NotificationResource;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function index()
    {

        return NotificationResource::collection(Notification::whereIn('post_id', Auth::user()->posts->pluck('id'))->get());
    }
}
