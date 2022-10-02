<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function profile(){
        return view('users.profile');
    }
    public function profileUpdate(){
        return redirect('/top');
    }

    public function search(){
        return view('users.search');
    }
}
