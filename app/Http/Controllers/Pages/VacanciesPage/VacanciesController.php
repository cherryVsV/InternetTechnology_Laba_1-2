<?php

namespace App\Http\Controllers\Pages\VacanciesPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VacanciesController extends Controller
{
    public function getAuthUser()
    {
        $profile = Auth::user();
        return view('pages.vacancies', compact('profile'));
    }
}
