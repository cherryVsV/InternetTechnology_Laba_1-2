<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;
    protected $table = 'discounts';
    protected $fillable = ['type_id', 'title', 'image', 'description', 'qrcode',
        'start', 'end', 'conditions'];
    public function type(){
        return $this->belongsTo(DiscountType::class, 'type_id');
    }
    public function products()
    {
        return $this->belongsToMany(Product::class)->using(ProductDiscount::class);
    }
}
