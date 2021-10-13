<?php

namespace App\Http\Controllers\Pages\PersonalAccount\ProfilePage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function getAuthUser()
    {
        $profile = Auth::user();
        return view('pages.profile', compact('profile'));
    }
}
