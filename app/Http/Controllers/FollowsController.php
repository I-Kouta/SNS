<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class FollowsController extends Controller
{
    //
    public function follow(User $user){
        // followsテーブルに追加する記述
        // dd($user); // ここには格納されている
        $follower = auth()->user();
        // フォローしているか
        $is_following = $follower->isFollowing($user->id);
        if(!$is_following) {
            // フォローしていなければフォローする
            // dd($is_following); // false
            // dd($follower); // 格納されている
           $follower->follow($user->id);
           return back();
        }
    }

    public function unFollow(User $user){
        $follower = auth()->user();
        // フォローしているか
        $is_following = $follower->isFollowing($user->id);
        if(!$is_following) {
           // フォローしていればフォロー解除
           $follower->unFollow($user->id);
           return back();
        }
    }


    public function followList(){
        return view('follows.followList');
    }
    public function followerList(){
        return view('follows.followerList');
    }
}
