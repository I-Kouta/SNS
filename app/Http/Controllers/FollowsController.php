<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowsController extends Controller
{
    //
    public function follow($id){
        // followsテーブルに追加する記述
        $user_id = Auth::id();
        \DB::table('follows')->insert([
            'following_id' => $user_id,
            'followed_id' => $id
        ]);
        return redirect('/search');
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
