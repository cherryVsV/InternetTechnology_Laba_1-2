<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SimilarProduct extends Model
{
    use HasFactory;
    protected $table = 'similar_products';
    protected $fillable = ['product1_id', 'product2_id', 'previous_price', 'new_price'];
    public function product1()
    {
        return $this->belongsTo(Product::class, 'product1_id');
    }
    public function product2()
    {
        return $this->belongsTo(Product::class, 'product2_id');
    }
}
