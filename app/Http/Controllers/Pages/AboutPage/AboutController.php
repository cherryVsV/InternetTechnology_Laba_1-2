<?php

namespace App\Http\Controllers\Pages\AboutPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AboutController extends Controller
{
    public function getAuthUser()
    {
        $profile = Auth::user();
        return view('pages.about', compact('profile'));
    }
}
