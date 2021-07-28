<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')->pluck('dec');
        $avr = DB::table('posts')->average('post_id');
        $count = DB::table('posts')->count();
        //dd($posts);
        //dd($count);
        //  dd($avr);
        return view('post.post', compact('posts'));
    }

    public function store()
    {
        DB::table('posts')->insert(['title' => 'مهدی', 'dec' => 'یا صاحب الزمان', "post_id" => 14]);
    }

    public function update()
    {
        DB::table('posts')->updateOrInsert(['title' => 'حسن', 'dec' => 'مخلص تمام امام حسنی ها', 'post_id' => 18], ['post_id' => 2]);
    }

    public function delete()
    {
        DB::table('posts')->where('id', 5)->delete();
    }
}
