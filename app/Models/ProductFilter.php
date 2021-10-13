<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProductFilter extends Model
{
    use HasFactory;
    protected $table = 'product_filters';
    protected $fillable = [ 'subcategory_id', 'filter'];
    protected $appends = ['subcategory'];
    public function subcategories()
    {
        return $this->belongsTo(Subcategory::class, 'subcategory_id');
    }
    public function products()
    {
        return $this->belongsToMany(Product::class, 'products_filters', 'filter_id', 'product_id');
    }
    public function getSubcategoryAttribute()
    {
        return DB::table('subcategories')->where('id', $this->subcategory_id )->value('title');
    }
}
