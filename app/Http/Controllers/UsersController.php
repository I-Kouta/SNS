<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $id = Auth::id();
        return User::where('id', $id)->update([
            'username' => $data['username'],
            'mail' => $data['mail'],
            'bio' => $data['bio'],
            'password' => bcrypt($data['password']),
            'images' => $data['image']
        ]);
    }

    public function profileUpdate(Request $request){
        $data = $request->input(); // ここに入力したデータが入っている
        if(($request['image']) != null){
            $request->image = $request->input('images');
        } else {
            // 空の場合の記述はここに
        }
        // dd($request['image']); // ここに記載したデータが入る
        $request->validate([
            'username' => 'required|string|min:2|max:12',
            'mail' => 'required|string|email|min:5|max:40|unique:users,mail,'.$request->id.',id',
            'password' => 'required|string|min:8|max:20|confirmed',
            'bio' => 'max:150',
            'images' => 'mimes:jpg, png, bmp, gif, svg'

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
