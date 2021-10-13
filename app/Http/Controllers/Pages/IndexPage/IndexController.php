<?php

namespace App\Http\Controllers\Pages\IndexPage;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function getAuthUser()
    {
        $profile = Auth::user();
        return view('index', compact('profile'));
    }
    public function getUser(){
        return response()->json([
            'user'=> Auth::user()
        ]);
    }
    public function getCategories(){
        return response()->json([
            'categories'=>Category::latest()->get()
        ]);
    }
}
