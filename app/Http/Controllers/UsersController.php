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
            $up_user = $request->input('upUser');
            $request->validate([
                'username' => 'required|string|min:2|max:12',
                'mail' => 'required|string|email|min:5|max:40|unique:users',
                'password' => 'required|string|min:8|max:20|confirmed'
            ]);
            \DB::table('users')->insert([
                'user' => $user
            ]);
            return redirect('/top'); // トップに移動する、正常に処理が完了
        }
        return view('users.profile'); // 留まる
    }

    public function search(){
        return view('users.search');
    }
}
