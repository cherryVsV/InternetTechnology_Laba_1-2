<?php

namespace App\Http\Controllers\Pages\CartPage;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Favourite;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function getAuthUser()
    {

        $profile = Auth::user();
        return view('pages.cart', compact('profile'));
    }
    public function addToCart($id)
    {
        if(Auth::user()){
            $favourite = Favourite::where(['user_id'=>Auth::user()->getAuthIdentifier(), 'product_id'=>$id])->first();
            if(!$favourite){
                Favourite::create([
                    'user_id'=>Auth::user()->getAuthIdentifier(),
                    'product_id'=>$id,
                    'is_in_basket'=>true,
                    'lot'=>1
                ]);
            }
            else{
                $favourite['is_in_basket'] = true;
                $favourite->lot+=1;
                $favourite->save();
            }
        }
    }
    public function addToCartUnique(){
        $products = [];
        $favourites = [];
        $compared = [];
        $subscription = [];
        if(Auth::user()){
            $cart = Favourite::where(['user_id'=>Auth::user()->getAuthIdentifier(), 'is_in_basket'=>true])->pluck('product_id');
            $products =Product::whereIn('id', $cart)->get();
            $favouriteIds = Favourite::where(['user_id'=>Auth::user()->getAuthIdentifier(), 'is_favourite'=>true])->pluck('product_id');
            $favourites =Product::whereIn('id', $favouriteIds)->get();
            $compareIds = Favourite::where(['user_id'=>Auth::user()->getAuthIdentifier(), 'is_compared'=>true])->pluck('product_id');
            $compared =Product::whereIn('id', $compareIds)->get();
            $subscriptionIds = Favourite::where(['user_id'=>Auth::user()->getAuthIdentifier(), 'is_in_waitlist'=>true])->pluck('product_id');
            $subscription = Product::whereIn('id', $subscriptionIds)->get();

        }
        return response()->json([
            'products'=>$products,
            'favourite'=>$favourites,
            'compared'=>$compared,
            'subscription'=>$subscription
        ]);
    }
    public function deleteFromCart(Request $request){
        if(Auth::user()){
            if($request->id==0) {
                $carts = Favourite::where('user_id', Auth::user()->getAuthIdentifier())->get();
                foreach ($carts as $cart) {
                    if ($cart['is_favourite'] || $cart['is_in_waitlist'] || $cart['is_compared']) {
                        $cart['is_in_basket'] = false;
                        $cart->lot = 0;
                        $cart->save();
                    } else {
                        $cart->delete();
                    }
                }
            }
            else{
                $cart = Favourite::where(['user_id'=>Auth::user()->getAuthIdentifier(), 'product_id'=>$request->id])->first();
                if($cart['is_favourite'] || $cart['is_in_waitlist'] || $cart['is_compared']){
                    $cart['is_in_basket'] = false;
                    $cart->lot = 0;
                    $cart->save();
                }
                else{
                    $cart->delete();
                }
            }

        }
    }
    public function updateCart($id){
        if(Auth::user()){
            $cart = Favourite::where(['user_id'=>Auth::user()->getAuthIdentifier(), 'product_id'=>$id])->first();

            if(($cart['is_favourite'] || $cart['is_in_waitlist']) && $cart->lot==1){
                $cart['is_in_basket'] = false;
                $cart->lot = 0;
                $cart->save();
            }
            elseif (($cart['is_favourite'] || $cart['is_in_waitlist']) && $cart->lot>1){
                $cart->lot-= 1;
                $cart->save();
            }
            elseif ($cart->lot>1){
                $cart->lot-= 1;
                $cart->save();
            }
            else{
                $cart->delete();
            }
        }
    }
    public function getProductsByCategory(Request $request){
        $categories = [];
        foreach ($request->categories as $category){
            $categories = Category::where('title', $category)->get()->pluck('id');
            }
        $subcategoriesIds = Subcategory::whereIn('category_id',  $categories)->get()->pluck('id');
        $products = Product::whereIn('subcategory_id', $subcategoriesIds)->get();
        return response()->json([
            'products'=>$products
        ]);
    }
}
