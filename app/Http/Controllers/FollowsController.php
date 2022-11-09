<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Post;

class FollowsController extends Controller
{
    //
    public function follow($id){
        // followsテーブルに追加する記述
        // dd($id); // ここには格納されている
        $follower = auth()->user();
        // フォローしているか
        $is_following = $follower->isFollowing($id);
        if(!$is_following) {
            // フォローしていなければフォローする
            // dd($is_following); // false
            // dd($follower); // 格納されている
           $follower->follow($id);
           return redirect('/search');
        }
    }

    public function unFollow($id){
        $follower = auth()->user();
        // フォローしているか
        $is_following = $follower->isFollowing($id);
        if($is_following) {
           // フォローしていればフォロー解除
           $follower->unFollow($id);
           return redirect('/search');
        }

    }

    public function followList(){
        // Postモデル内のuser_idがフォローしているユーザーを最新順に取得
        $lists = Post::query()
        ->whereIn('user_id', Auth::user()
        ->follows()
        ->pluck('followed_id'))
        ->latest()
        ->select('posts.id', 'posts.user_id', 'posts.post', 'posts.created_at', 'posts.updated_at', 'users.username as user_name' )
        ->join('users', 'posts.user_id', '=', 'users.id')
        ->get();
        return view('follows.FollowList')->with([
            'lists' => $lists,
        ]);
    }

    public function followerList(){
        $lists = Post::query()
        ->whereIn('user_id', Auth::user()
        ->follows()
        ->pluck('followed_id'))
        ->latest()
        ->select('posts.id', 'posts.user_id', 'posts.post', 'posts.created_at', 'posts.updated_at', 'users.username as user_name' )
        ->join('users', 'posts.user_id', '=', 'users.id')
        ->get();
        return view('follows.FollowList')->with([
            'lists' => $lists,
        ]);
    }
}
