<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscountType extends Model
{
    use HasFactory;
    protected $table = 'discount_types';
    protected $fillable = ['title'];
    public function discounts()
    {
        return $this->HasMany(Discount::class);
    }
}
