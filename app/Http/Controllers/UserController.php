<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit()
    {
        $user = auth()->user();

        return view('affiliate.pages.profile-edit')->with([
          'user' => $user,
        ]);
    }

    public function update()
    {
      $user = auth()->user();

      $rules = [
        'name' => 'required',
        'email' => 'required|email',
      ];

      if (request('email') && request('email') !== $user->email) $rules['email'] = 'required|email|unique:users';
      if (request('password')) $rules['password'] = 'required|min:6|confirmed';

      $this->validate(request(), $rules);

      $user->name = request('name');
      $user->email = request('email');

      if (request('password')) $user->password = bcrypt(request('password'));

      $user->save();

      return back()->withSuccess('Your profile has been updated.');
    }
}
