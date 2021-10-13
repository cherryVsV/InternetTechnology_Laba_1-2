<?php

namespace App\Http\Controllers\Pages\StockPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StockController extends Controller
{
    public function getAuthUser()
    {
        $profile = Auth::user();
        return view('pages.stock', compact('profile'));
    }
}
