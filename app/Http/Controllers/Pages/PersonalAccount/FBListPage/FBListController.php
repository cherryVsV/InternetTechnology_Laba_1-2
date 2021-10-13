<?php

namespace App\Http\Controllers\Pages\PersonalAccount\FBListPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FBListController extends Controller
{
    public function getAuthUser()
    {
        $profile = Auth::user();
        return view('pages.fblist', compact('profile'));
    }
}
