<?php

namespace App\Http\Controllers\Pages\PersonalAccount\LKPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LKController extends Controller
{
    public function getAuthUser()
    {
        $profile = Auth::user();
        return view('pages.lk', compact('profile'));
    }
}
