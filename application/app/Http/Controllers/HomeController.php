<?php

namespace App\Http\Controllers;

use App\Models\CategoryTranslation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private string $locale;

    public function __construct()
    {
        $this->locale = app()->getLocale();
    }

    public function categories()
    {
        $categories = CategoryTranslation::query()
            ->whereRelation('language','title', '=',$this->locale)
            ->get();
        dd($categories);
    }
}
