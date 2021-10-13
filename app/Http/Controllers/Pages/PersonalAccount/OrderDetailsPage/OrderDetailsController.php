<?php

namespace App\Http\Controllers\Pages\PersonalAccount\OrderDetailsPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderDetailsController extends Controller
{
    public function getAuthUser()
    {
        $profile = Auth::user();
        return view('pages.orderdetails', compact('profile'));
    }
}
