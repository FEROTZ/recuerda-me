<?php

namespace App\Actions\Fortify;

use App\Models\User;

class AuthenticateUser
{
  public function authenticate($request)
  {
    $username = $request->post(config('fortify.username'));
    $password = $request->post('password');

    $user = User::where('username', '=', $username)
        ->orWhere('email', '=', $username)
        ->where('password', '=', md5($password))
        ->first();
  }
}