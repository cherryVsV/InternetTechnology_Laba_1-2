<?php

namespace App\Http\Controllers\Pages\ContentPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContentController extends Controller
{
    public function getAuthUser()
    {
        $profile = Auth::user();
        return view('content', compact('profile'));
    }
}
