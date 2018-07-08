<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user(Request $request)
    {
        $data = [
            'success' => true,
            'user' => $request->user(),
        ];

        return response()->json($data);
    }
}
