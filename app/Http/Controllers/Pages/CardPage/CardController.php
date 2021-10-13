<?php

namespace App\Http\Controllers\Pages\CardPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CardController extends Controller
{
    public function getAuthUser()
    {
        $profile = Auth::user();
        return view('pages.card', compact('profile'));
    }
}
