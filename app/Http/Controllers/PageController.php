<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $names = ["ali", "javad", "hadi"];
        return view("fatemeh/reza", compact('names'));
    }

    public function shoeib()
    {
        echo "ali is big man";
    }
}
