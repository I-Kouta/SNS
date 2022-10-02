<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function profile(){
        return view('users.profile');
    }
    public function profileUpdate(Request $request){
        if($request->isMethod('post')){
            $data = $request->input(); // ここに入力したデータが入っている
            $request->validate([
                'username' => 'required|string|min:2|max:12',
                'mail' => 'required|string|email|min:5|max:40|unique:users',
                'password' => 'required|string|min:8|max:20|confirmed'
            ]);
            $this->create($data);
            return redirect('/top'); // トップに移動する
        }
        return view('users.profile'); // 留まる
    }

    public function search(){
        return view('users.search');
    }
}
