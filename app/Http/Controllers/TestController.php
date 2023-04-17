<?php

namespace App\Http\Controllers;

use App\Http\Resources\TestResource;
use App\Models\Test;
use App\Models\TestType;
use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    public function index(TestType $type)
    {

        return TestResource::collection($type->tests);
    }

    public function show($id)
    {
        $result =  Result::where('user_id', $id)->get();

        return response()->json($result);
    }

    public function results($id)
    {


        $results = Result::where([
            ['test_type_id', '=', $id],
            ['user_id', '=', Auth::user()->id]
        ])->get();

        return response()->json($results);
    }
}
