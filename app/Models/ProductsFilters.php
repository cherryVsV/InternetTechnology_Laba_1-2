<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ProductsFilters extends Pivot
{
    use HasFactory;
    protected $table = 'products_filters';
}
