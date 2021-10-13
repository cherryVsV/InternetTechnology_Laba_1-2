<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = ['title', 'icon'];
    protected $appends = ['subcategories', 'product'];
    public function subcategories()
    {
        return $this->HasMany(Subcategory::class);
    }
    public function getSubcategoriesAttribute()
    {
        $subcategories = Subcategory::where('category_id',  $this->id)->get();
        if($subcategories->count() > 0) {
            return $subcategories;
        }
        return 0;
    }
    public function getProductAttribute()
    {
        $subcategories = Subcategory::where('category_id', $this->id)->get()->pluck('id');
        if($subcategories->count() > 0) {
            return Product::whereIn('subcategory_id', $subcategories)->count();
        }
        return 0;

    }

}
