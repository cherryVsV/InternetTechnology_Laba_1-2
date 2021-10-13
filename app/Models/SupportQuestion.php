<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportQuestion extends Model
{
    use HasFactory;
    protected $table = 'support_questions';
    protected $fillable = ['type_id', 'question', 'answer'];
    public function types()
    {
        return $this->belongsTo(QuestionType::class);
    }
}
