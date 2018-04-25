<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function local()
    {
        return response()->json(['user' => auth()->user()]);
    }

    public function oauth()
    {
        return response()->json(auth()->user());
    }
}
