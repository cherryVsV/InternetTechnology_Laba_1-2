<?php

namespace App\Http\Controllers\Pages\WarrantyPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WarrantyController extends Controller
{
    public function getAuthUser()
    {
        $profile = Auth::user();
        return view('pages.warranty', compact('profile'));
    }
}
