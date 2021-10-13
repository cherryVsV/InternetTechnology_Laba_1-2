<?php

namespace App\Http\Controllers\Pages\ReviewPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function getAuthUser()
    {
        $profile = Auth::user();
        return view('pages.review', compact('profile'));
    }
}
