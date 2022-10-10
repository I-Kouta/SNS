<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function index(){
        // ここにログインしたユーザー情報を書く
        return view('posts.index');
    }

    public function create(Request $request){
        $post = $request->input('newPost');
        $id = $request->input('id');
        // dd($request);
        $post->validate([
            'post' => 'required|string|min:1|max:200|',
        ]);
        \DB::table('posts')->insert([
            'post' => $post
        ]);
        return redirect('index');
    }

}
