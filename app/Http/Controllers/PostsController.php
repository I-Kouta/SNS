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
        // dd($request);
        $request->validate([
            'post' => 'required|min:1|max:200|',
        ]);
        \DB::table('posts')->insert([
            'post' => $post
        ]);
        return redirect('index');
    }

}
