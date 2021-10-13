<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $table = 'subcategories';
    protected $fillable = ['title', 'category_id', 'icon'];
    protected $appends = ['filters'];
    public function filters()
    {
        return $this->HasMany(ProductFilter::class);
    }
    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function products()
    {
        return $this->HasMany(Product::class);
    }
    public function getFiltersAttribute()
    {
        $filters = ProductFilter::where('subcategory_id',  $this->id)->get();
        if($filters->count() > 0) {
            return $filters;
        }
        return 0;
    }
}
