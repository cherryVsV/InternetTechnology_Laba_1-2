<?php

namespace App\Http\Controllers\Pages\Cart1Page;

use App\Http\Controllers\Controller;
use App\Mail\OrderDetailMail;
use App\Models\Order;
use App\Models\PaymentMethod;
use App\Models\Product;
use App\Models\ProductOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class Cart1Controller extends Controller
{
    public function getAuthUser()
    {
        $profile = Auth::user();
        $payments = PaymentMethod::latest()->get();
        return view('pages.cart1', compact('profile', 'payments'));
    }
    public function addNewOrder(Request $request)
    {
        $this->validate($request, [
            'delivery_id' => 'required',
            'payment_id' => 'required',
            'phone' => 'required|string',
            'name' => 'required|string',
            'email' => 'required|string',
            'price' => 'required',
            'quantity' => 'required',
        ]);
        $order = Order::create([
            'user_id'=>$request->user_id,
            'delivery_id'=>$request->delivery_id,
            'payment_id'=>$request->payment_id,
            'status_id'=>1,
            'name'=>$request->name,
            'email'=>$request->email,
            'price'=>$request->price,
            'phone'=>$request->phone,
            'quantity'=>$request->quantity,
            'address'=>$request->address,
            'postcode'=>$request->postcode,
            'comment'=>$request->comment,
            'delivery_datetime'=>$request->delivery_datetime
        ]);
        foreach ($request->products as $product){
           ProductOrder::create([
               'order_id'=>$order->id,
               'product_id'=>$product['id'],
               'price'=>$product['totalPrice'],
               'quantity'=>$product['quantity'],
               'properties'=>$product['properties']

           ]);
        }
        $data = $request;
        Mail::to($request->email)->send(new OrderDetailMail($data));
        return response()->json([
            'href'=>'/cartcomplete-'.$order->id
        ]);

    }

}
