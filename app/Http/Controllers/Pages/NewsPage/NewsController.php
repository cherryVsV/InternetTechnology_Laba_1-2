<?php

namespace App\Http\Controllers\Pages\NewsPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function getAuthUser()
    {
        $profile = Auth::user();
        return view('pages.news', compact('profile'));
    }
}
