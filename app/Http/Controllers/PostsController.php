<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    //
    public function index(){
        // ここにログインしたユーザー情報を書く
        $list = \DB::table('posts')->get();
        $name = \DB::table('users')->get();
        return view('posts.index', ['list'=>$list], ['name'=>$name]);
    }

    public function create(Request $request){
        $post = $request->input('newPost');
        $user_id = Auth::id();
        // dd($request);
        \DB::table('posts')->insert([
            'user_id' => $user_id,
            'post' => $post
        ]);
        return redirect('/top');
    }

}
