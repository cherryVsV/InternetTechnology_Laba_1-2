<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSubscrition extends Model
{
    use HasFactory;
    protected $table = 'product_subscriptions';
    protected $fillable = ['product_id', 'email'];
    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
