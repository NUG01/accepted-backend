<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResultRequest;
use Illuminate\Http\Request;
use App\Models\Result;
use Illuminate\Support\Facades\Auth;

class ResultController extends Controller
{
    public function store(ResultRequest $request)
    {
        Result::create([

            'user_id' => Auth::user()->id,
            'test_type_id' => $request->test_type_id,
            'score' => $request->score,
            'incorrect' => $request->incorrect,
        ]);


        return response()->json($request);
    }
}
