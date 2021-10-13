<?php

namespace App\Http\Controllers\Pages\Stock2Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Stock2Controller extends Controller
{
    public function getAuthUser()
    {
        $profile = Auth::user();
        return view('pages.stock2', compact('profile'));
    }
}
