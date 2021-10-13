<?php

namespace App\Http\Controllers\Pages\DeliveryPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeliveryController extends Controller
{
    public function getAuthUser()
    {
        $profile = Auth::user();
        return view('pages.delivery-page', compact('profile'));
    }
}
