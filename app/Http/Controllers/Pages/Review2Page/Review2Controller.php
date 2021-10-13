<?php

namespace App\Http\Controllers\Pages\Review2Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Review2Controller extends Controller
{
    public function getAuthUser()
    {
        $profile = Auth::user();
        return view('pages.review2', compact('profile'));
    }
}
