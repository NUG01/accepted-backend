<?php

namespace App\Http\Controllers;

use App\Http\Resources\TestTypeResource;
use App\Models\TestType;
use Illuminate\Http\Request;

class TestTypeController extends Controller
{
    public function index()
    {

        return TestTypeResource::collection(TestType::all());
    }
}
