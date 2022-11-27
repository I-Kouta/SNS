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

    protected function update(array $data)
    {
        return User::update([
            'username' => $data['username'],
            'mail' => $data['mail'],
            'password' => bcrypt($data['password'])
        ]);
    }

    public function profileUpdate(Request $request){
        $data = $request->input(); // ここに入力したデータが入っている
        // dd($request['username']); // ここに記載したデータが入る
        $request->validate([
            'username' => 'required|string|min:2|max:12',
            'mail' => 'required|string|email|min:5|max:40|unique:users,mail,'.$request->id.',id',
            'password' => 'required|string|min:8|max:20|confirmed'
        ]);
        $this->update($data); // ここで更新して
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
