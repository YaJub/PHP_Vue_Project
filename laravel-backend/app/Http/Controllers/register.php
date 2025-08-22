<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;

class register extends Controller
{
    public function register(Request $request)
    {
    Log::info(' Request reached Controller', ['url' => $request->fullUrl()]);

        return response()->json([
            'message' => 'Request Circle demo, this is from controller',
            'status' => 'success',
            'data' => [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
            ],
            'time'    => now()
        ]);
    }
}
