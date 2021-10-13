<?php

namespace App\Http\Controllers\Pages\CatalogMainPage;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductFilter;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CatalogMainController extends Controller
{
    public function getAuthUser()
    {
        $profile = Auth::user();
        $categories = Category::latest()->get();
        return view('pages.catalogmain', compact('profile', 'categories'));
    }

    public function  getSubcategories($id)
    {
        return Subcategory::where('category_id', $id)->get();
    }

    public function  getFilters($id)
    {
        return ProductFilter::where('subcategory_id', $id)->get();
    }

}
