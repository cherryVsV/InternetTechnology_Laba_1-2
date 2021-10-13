<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['article', 'title', 'description', 'properties', 'new_price',
        'previous_price', 'images', 'icons', 'status_id', 'subcategory_id'];
    protected $appends = ['category', 'filters'];
    public function status(){
        return $this->belongsTo(ProductStatus::class, 'status_id');

    }
    public function discounts()
    {
        return $this->belongsToMany(Discount::class)->using(ProductDiscount::class);
    }
    public function orders()
    {
        return $this->HasMany(ProductOrder::class);
    }
    public function similar()
    {
        return $this->HasMany(SimilarProduct::class);
    }
    public function favourites()
    {
        return $this->HasMany(Favourite::class);
    }
    public function comments()
    {
        return $this->HasMany(Comment::class);
    }
    public function subscriptions()
    {
        return $this->belongsTo(ProductSubscrition::class);
    }

    public function subcategories()
    {
        return $this->belongsTo(Subcategory::class, 'subcategory_id');
    }

    public function reviews()
    {
        return $this->belongsToMany(News::class)->using(ProductReview::class);
    }
    public function filters()
    {
        return $this->belongsToMany(ProductFilter::class, 'products_filters', 'product_id', 'filter_id');
    }

    public function getCategoryAttribute()
    {
        $subcategory = Subcategory::where('id',  $this->subcategory_id)->pluck('category_id');
        return DB::table('categories')->where('id', $subcategory )->value('title');
    }
    public function getFiltersAttribute()
    {
       return $this->filters()->get();

    }
}
