<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class CardController extends Controller
{
    public function __construct()
    {
    }

    public function getProduct():View
    {
        session(['card'=>['name'=>'prod','price'=> 7778, 'count' => 1]]);
        return view('test');
    }
}
