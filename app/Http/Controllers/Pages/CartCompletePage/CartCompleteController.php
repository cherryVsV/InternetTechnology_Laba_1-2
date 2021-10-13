<?php

namespace App\Http\Controllers\Pages\CartCompletePage;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartCompleteController extends Controller
{
    public function getAuthUser($id)
    {
        $profile = Auth::user();
        $order = Order::find($id);
        return view('pages.cartcomplete', compact('profile', 'order'));
    }
}
