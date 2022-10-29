<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

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
        $user = \DB::table('users')->get();
        return view('users.search',['user'=>$user]);
    }

    public function searchResult(Request $request){
        $keyword = $request->input('keyword');
        // dd($keyword); // これは意図した通り
        $query = User::query();
        if(!empty($keyword)){
            $query->where('username', 'LIKE', "%{$keyword}%");
        }
        $user = $query->get();
        return view('users.search', compact('user', 'keyword'));
    }
}
