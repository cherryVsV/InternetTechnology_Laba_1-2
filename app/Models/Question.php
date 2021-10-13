<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $table = 'questions';
    protected $fillable = [ 'name', 'phone', 'email', 'order_id', 'question', 'file', 'answer'];
    public function orders()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }
}
