<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public function posts(){
        return $this->hasMany('App\Post');
    }

    // フォローする
    public function follow(Int $user_id)
    {
        return $this->follows()->attach($user_id);
    }

    // フォロー解除
    public function follows()
    {
        return $this->belongsToMany('App\User', 'follows', 'following_id', 'followed_id');
    }

    // フォローしているか
   public function isFollowing($user_id)
   {
        // dd($user_id); // 引数のIntを除外して確認。nullでした
        return (boolean) $this->follows()->where('followed_id', $user_id)->first(['id']);
   }

   // フォローされているか
   public function isFollowed($user_id)
   {
        return (boolean) $this->followers()->where('following_id', $user_id)->first(['id']);
   }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'mail', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
