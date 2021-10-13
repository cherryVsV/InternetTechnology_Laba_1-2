<?php

namespace App\Http\Controllers\Pages\FAQPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FAQController extends Controller
{
    public function getAuthUser()
    {
        $profile = Auth::user();
        return view('pages.faq', compact('profile'));
    }
}
