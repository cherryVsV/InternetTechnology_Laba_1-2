<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryMethod extends Model
{
    use HasFactory;
    protected $table = 'delivery_methods';
    protected $fillable = ['title', 'description', 'price'];
    public function orders()
    {
        return $this->HasMany(Order::class);
    }
}
