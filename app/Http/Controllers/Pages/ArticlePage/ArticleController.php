<?php

namespace App\Http\Controllers\Pages\ArticlePage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function getAuthUser()
    {
        $profile = Auth::user();
        return view('pages.article', compact('profile'));
    }
}
