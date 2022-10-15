<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    //
    public function index(){
        // ここにログインしたユーザー情報を書く
        // order by created_at desc;
        $list = \DB::table('posts')
        ->select('posts.id', 'posts.user_id', 'posts.post', 'posts.created_at', 'posts.updated_at', 'users.username as user_name' )
        ->join('users', 'posts.user_id', '=', 'users.id')
        ->orderBy('created_at', 'desc')
        ->get();
        return view('posts.index',['list'=>$list]);
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
