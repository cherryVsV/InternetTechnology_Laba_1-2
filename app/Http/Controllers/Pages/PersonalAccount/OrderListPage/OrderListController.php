<?php

namespace App\Http\Controllers\Pages\PersonalAccount\OrderListPage;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderListController extends Controller
{
    public function getAuthUser()
    {
        $profile = Auth::user();
        return view('pages.orderlist', compact('profile'));
    }
    public function makeFastOrder(Request $request){
             $order = Order::create([
                 'status_id'=>1,
                 'delivery_id'=>4,
                 'payment_id'=>5,
                 'name'=>$request->name,
                 'phone'=>$request->phone,
                 'price'=>$request->price,
                 'quantity'=>$request->count,
                 'address'=>'Не задан',
             ]);
             if($request->id!=0){
                 $order->user_id = $request->id;
                 $order->save();
             }
             $product = Product::find($request->product);
             ProductOrder::create([
                 'order_id'=>$order->id,
                 'product_id'=>$product->id,
                 'price'=>$product->new_price,
                 'quantity'=>$request->count
             ]);

    }
}
