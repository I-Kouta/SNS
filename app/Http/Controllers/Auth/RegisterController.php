<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data) // ここがバリデーションの内容
    {
        return Validator::make($data, [
            'username' => 'required|string|between:2,12',
            'mail' => 'required|string|email|between:5,40|unique:users',
            'password' => 'required|string|between:8,20|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'mail' => $data['mail'],
            'password' => bcrypt($data['password']),
        ]);
        //if ($validator->fails()) {
        //    return redirect()->back()
        //    ->withInput()
        //    ->withErrors($validator);
        //} →ここだとエラーメッセージは何も変化がありませんでした。
    }


    // public function registerForm(){
    //     return view("auth.register");
    // }

    public function register(Request $request){ // ここがバリデーションの処理
        if($request->isMethod('post')){
            $data = $request->input();

            $this->create($data);
            return redirect('added');
        }
        return view('auth.register');
    }
    //public function register〜内に記述をすると変数の名前が違う、というエラーが出ました。

    public function added(){
        return view('auth.added');
    }
}
