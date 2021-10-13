<?php

namespace App\Http\Controllers\Pages\FavoritePage;

use App\Http\Controllers\Controller;
use App\Models\Favourite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function getAuthUser()
    {
        $profile = Auth::user();
        return view('pages.favorite', compact('profile'));
    }
    public function updateFavourites(Request $request, $id){
        if(Auth::user()) {
            $favourite = Favourite::where(['user_id'=>Auth::user()->getAuthIdentifier(), 'product_id'=>$id])->first();
            if ($request->add) {
                if($favourite){
                    $favourite['is_favourite']=true;
                    $favourite->save();
                }
                else{
                    Favourite::create([
                        'user_id'=>Auth::user()->getAuthIdentifier(),
                        'product_id'=>$id,
                        'is_favourite'=>true
                    ]);
                }

            } else {
                if($favourite && ($favourite['is_in_basket'] || $favourite['is_in_waitlist'] || $favourite['is_compared'])){
                    $favourite['is_favourite']=false;
                    $favourite->save();
                }
                else{
                   $favourite->delete();
                }

            }
        }

    }
    public function deleteFavourites(){
        if(Auth::user()) {
            $carts = Favourite::where('user_id', Auth::user()->getAuthIdentifier())->get();
            foreach ($carts as $cart) {
                if ($cart['is_in_basket'] || $cart['is_in_waitlist'] || $cart['is_compared']) {
                    $cart['is_favourite'] = false;
                    $cart->save();
                } else {
                    $cart->delete();
                }
            }
        }
    }
}
