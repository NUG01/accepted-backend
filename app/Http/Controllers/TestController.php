<?php

namespace App\Http\Controllers;

use App\Http\Resources\TestResource;
use App\Models\Test;
use App\Models\TestType;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(TestType $type)
    {

        return TestResource::collection($type->tests);
    }
}
