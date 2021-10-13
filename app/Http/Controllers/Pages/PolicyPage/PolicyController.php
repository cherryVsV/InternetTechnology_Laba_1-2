<?php

namespace App\Http\Controllers\Pages\PolicyPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PolicyController extends Controller
{
    public function getAuthUser()
    {
        $profile = Auth::user();
        return view('pages.policy', compact('profile'));
    }
}
