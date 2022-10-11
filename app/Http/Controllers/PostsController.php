<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }

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
