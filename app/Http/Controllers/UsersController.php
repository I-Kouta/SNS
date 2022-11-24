<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Post;

class UsersController extends Controller
{
    //
    public function userProfile($id){
        $posts = Post::with('user')->where('user_id', $id)->get();
        $user = User::where('id', $id)->get();
        return view('users.usersProfile',['posts'=>$posts, 'user'=>$user]);
    }

    public function profile($id){
        $user = User::where('id', $id)->get();
        return view('users.profile',['user'=>$user]);
    }

    public function profileUpdate(Request $request){
        $id = $request->input('id');
        $data = $request->input();
        dd($data);
        User::where('id', $id)
        ->update($data);
        return redirect('/top');
    }

    public function search(){
        $user = User::get();
        return view('users.search',['user'=>$user]);
    }

    public function searchResult(Request $request){
        $keyword = $request->input('keyword');
        $query = User::query();
        if(!empty($keyword)){
            $query->where('username', 'LIKE', "%{$keyword}%");
        }
        $user = $query->get();
        return view('users.search', compact('user', 'keyword'));
    }
}
