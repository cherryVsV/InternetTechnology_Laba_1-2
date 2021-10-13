<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table = 'news';
    protected $fillable = ['title', 'description', 'image', 'video',
        'creators', 'tags'];
    public function products()
    {
        return $this->belongsToMany(Product::class)->using(ProductReview::class);
    }
}
