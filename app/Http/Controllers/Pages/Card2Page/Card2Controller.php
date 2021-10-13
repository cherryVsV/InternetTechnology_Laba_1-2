<?php

namespace App\Http\Controllers\Pages\Card2Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Card2Controller extends Controller
{
    public function getAuthUser()
    {
        $profile = Auth::user();
        return view('pages.card2', compact('profile'));
    }
}
