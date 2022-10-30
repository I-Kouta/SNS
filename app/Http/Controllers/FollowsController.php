<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FollowsController extends Controller
{
    //
    public function follow(){
        // followsテーブルに追加する記述
        return redirect('/search');
    }

    public function unFollow(){
        // followsテーブルから削除する記述
        return redirect('/search');
    }


    public function followList(){
        return view('follows.followList');
    }
    public function followerList(){
        return view('follows.followerList');
    }
}
