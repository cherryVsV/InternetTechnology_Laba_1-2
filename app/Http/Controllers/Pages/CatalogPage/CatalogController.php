<?php

namespace App\Http\Controllers\Pages\CatalogPage;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductFilter;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class CatalogController extends Controller
{
    public function getProductsByFilter($type, $id)
    {
        $profile = Auth::user();
        if($type==='category'){
            $category = Category::find($id);
            $subcategories = Subcategory::where('category_id', $id)->get();
            $subcategoriesIds = Subcategory::where('category_id',  $id)->get()->pluck('id');
            $products = Product::whereIn('subcategory_id', $subcategoriesIds)->get();
            $filters = ProductFilter::whereIn('subcategory_id', $subcategoriesIds )->get();
            return view('pages.catalog', compact('profile',
                'category', 'subcategories', 'products', 'filters'));
        }
        if($type==='subcategory'){
            $category = Subcategory::find($id);
            $products = Product::where('subcategory_id', $id)->get();
            $filters = ProductFilter::where('subcategory_id', $id)->get();
            $subcategories = null;
            return view('pages.catalog', compact('profile',
                'category', 'subcategories', 'products', 'filters'));
        }
        if($type==='filter'){
            $category = ProductFilter::find($id);
            $filters = ProductFilter::where('subcategory_id', $category->subcategory_id)->get();
            $products = ProductFilter::find($id)->products()->get();
            $subcategories = null;
            return view('pages.catalog', compact('profile',
                'category', 'subcategories', 'products', 'filters'));
        }

    }


}
