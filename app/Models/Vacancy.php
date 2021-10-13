<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;
    protected $table = 'vacancies';
    protected $fillable = ['title', 'description', 'wishes', 'duties', 'conditions'];
    public function forms()
    {
        return $this->HasMany(VacancyForm::class);
    }
}
