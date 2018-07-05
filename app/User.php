<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'username', 'password', 'name', 'avatar', 'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected function create(array $data) {
      return User::create([
        'email' => $data['email'],
        'username' => $data['username'],
        'password' => bcrypt($data['password']),
        'name' => $data['name'],
        'avatar' => $data['avatar'],
        'status' => $data['status'],
      ]);
    }
}
