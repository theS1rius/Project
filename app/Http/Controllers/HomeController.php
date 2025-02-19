<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Shop\Entity\Merchandise;

class HomeController extends Controller
{
    public function indexPage()
    {
        $merchandises = Merchandise::get();
        $binding = [
            'merchandises' => $merchandises,
        ];
        return view('index', $binding);
    }
}