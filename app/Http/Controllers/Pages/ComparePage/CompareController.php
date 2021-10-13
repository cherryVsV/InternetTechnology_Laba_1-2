<?php

namespace App\Http\Controllers\Pages\ComparePage;

use App\Http\Controllers\Controller;
use App\Models\Favourite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompareController extends Controller
{
    public function getAuthUser()
    {
        $profile = Auth::user();
        return view('pages.compare', compact('profile'));
    }
    public function updateCompared(Request $request, $id){
        if(Auth::user()) {
            $favourite = Favourite::where(['user_id'=>Auth::user()->getAuthIdentifier(), 'product_id'=>$id])->first();
            if ($request->add) {
                if($favourite){
                    $favourite['is_compared']=true;
                    $favourite->save();
                }
                else{
                    Favourite::create([
                        'user_id'=>Auth::user()->getAuthIdentifier(),
                        'product_id'=>$id,
                        'is_compared'=>true
                    ]);
                }

            } else {
                if($favourite && ($favourite['is_in_basket'] || $favourite['is_in_waitlist'] || $favourite['is_favourite'])){
                    $favourite['is_compared']=false;
                    $favourite->save();
                }
                else{
                    $favourite->delete();
                }

            }
        }

    }
    public function deleteCompared(){
        if(Auth::user()) {
            $carts = Favourite::where('user_id', Auth::user()->getAuthIdentifier())->get();
            foreach ($carts as $cart) {
                if ($cart['is_in_basket'] || $cart['is_in_waitlist'] || $cart['is_favourite']) {
                    $cart['is_compared'] = false;
                    $cart->save();
                } else {
                    $cart->delete();
                }
            }
        }
    }
}
