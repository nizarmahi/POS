<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('product');
    }

    public function foodBeverage()
    {
        return view('categories', ['category' => 'FOOD BEVERAGE']);
    }

    public function beautyHealth()
    {
        return view('categories', ['category' => 'BEAUTY HEALTH']);
    }

    public function homeCare()
    {
        return view('categories', ['category' => 'HOME CARE']);
    }

    public function babyKid()
    {
        return view('categories', ['category' => 'BABY KID']);
    }
}
