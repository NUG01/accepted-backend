<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResultRequest;
use Illuminate\Http\Request;
use App\Models\Result;
use Illuminate\Support\Facades\Auth;

class ResultController extends Controller
{

    public function index(Result $result)
    {

        return response()->json($result);
    }
    public function store(ResultRequest $request)
    {
        $result = Result::create([

            'user_id' => Auth::user()->id,
            'test_type_id' => $request->test_type_id,
            'score' => $request->score,
            'max' => $request->max,
            'incorrect' => $request->incorrect,
        ]);


        return response()->json($result);
    }
}
