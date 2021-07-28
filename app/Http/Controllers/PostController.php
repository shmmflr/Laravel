<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $posts = DB::table("post")->get();
        dd($posts);
        return view('post.post', compact("posts"));
    }

    public function store()
    {
        DB::table('post')->insert([
            'name' => 'shoeib',
            'family' => 'alinezhad',
        ]);
    }

    public function update()
    {
        // DB::table("post")->where('id', 3)->update(['name' => "ali"]);
        DB::table('post')->updateOrInsert(['name' => 'rahim', 'family' => 'alavi'], ['name' => 'ali']);
    }
}
