<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        return view('post.create');
    }
}
