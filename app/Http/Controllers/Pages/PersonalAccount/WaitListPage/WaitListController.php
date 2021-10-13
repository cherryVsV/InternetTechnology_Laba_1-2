<?php

namespace App\Http\Controllers\Pages\PersonalAccount\WaitListPage;

use App\Http\Controllers\Controller;
use App\Models\Favourite;
use App\Models\ProductSubscrition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WaitListController extends Controller
{
    public function getAuthUser()
    {
        $profile = Auth::user();
        return view('pages.waitlist', compact('profile'));
    }
    public function addSubscription(Request $request)
    {
        if($request->id!==0){
            $favourite = Favourite::where(['product_id'=> $request->product, 'user_id'=>$request->id])->first();
            if(!$favourite){
                Favourite::create([
                    'user_id'=>$request->id,
                    'product_id'=>$request->product,
                    'is_in_waitlist'=>true
                ]);
            }
            else{
                $favourite['is_in_waitlist'] = true;
                $favourite->save();
            }
        }
        $subscription = ProductSubscrition::where(['email'=>$request->email, 'product_id'=>$request->product])->first();
        if(!$subscription) {
            ProductSubscrition::create([
                'email' => $request->email,
                'product_id' => $request->product
            ]);
        }

    }
}
