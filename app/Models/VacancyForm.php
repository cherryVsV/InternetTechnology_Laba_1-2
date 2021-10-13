<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VacancyForm extends Model
{
    use HasFactory;
    protected $table = 'vacancy_forms';
    protected $fillable = ['name', 'vacancy_id', 'phone', 'email', 'info', 'resume'];
    public function vacancy()
    {
        return $this->belongsTo(Vacancy::class, 'vacancy_id');
    }
}
