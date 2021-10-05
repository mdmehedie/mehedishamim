<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\HomeCategoryOrder;

class HomeController extends Controller
{
    public function index()
    {
        $home = Home::first();
        $homeCategoryOrder = HomeCategoryOrder::where('status', 1)->orderBy('order', "ASC")->get();


        return response()->view('home', [
            'home' => $home,
            'homeCategory' => $homeCategoryOrder
        ]);
    }
}
