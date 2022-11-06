<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

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
           return back();
        }
    }

    public function unFollow($id){
        $follower = auth()->user();
        // フォローしているか
        $is_following = $follower->isFollowing($id);
        if(!$is_following) {
           // フォローしていればフォロー解除
           $follower->unFollow($id);
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
