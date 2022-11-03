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
           $follower->follow($user->id);
           return redirect('/search');
        }
    }

    public function unFollow($id){
        // followsテーブルから削除する記述
        \DB::table('follows')
        ->where('followed_id', $id)
        ->delete();
        return redirect('/search');
    }


    public function followList(){
        return view('follows.followList');
    }
    public function followerList(){
        return view('follows.followerList');
    }
}
