<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function changeLanguage()
    {
        app()->setLocale('@lang');
        // Lưu ngôn ngữ vào session
        session(['locale' => '@lang']);
        // Redirect về trang trước đó
        return redirect()->back();
    }

    public function index()
    {
        return view('welcome'); // View hiển thị trang chính
    }

    public function showForm()
    {
        return view('form'); // View hiển thị form
    }

    public function submitForm(Request $request)
    {
        // Validation
        $validated = $request->validate([
            'name' => 'required|string|max:255'
        ]);

        // Logging
        Log::info("Form submitted by: " . $validated['name']);

        // HTTP Response
        return response()->json([
            'status' => 'success',
            'name' => $validated['name']
        ]);
        
    }
    

}
