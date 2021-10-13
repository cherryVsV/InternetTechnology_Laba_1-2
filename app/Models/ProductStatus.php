<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductStatus extends Model
{
    use HasFactory;
    protected $table = 'product_statuses';
    protected $fillable = ['title'];
    public function products()
    {
        return $this->HasMany(Product::class);
    }
}