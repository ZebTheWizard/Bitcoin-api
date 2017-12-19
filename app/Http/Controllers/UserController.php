<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function create (Request $r) {
      $validate = $r->validate([
          'name' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:users',
          'password' => 'required|string|min:6|confirmed',
      ]);

      return User::create([
          'name' => $r['name'],
          'email' => $r['email'],
          'password' => bcrypt($r['password']),
      ]);
    }

    public function login (Request $r) {
      $credentials = ['email' => $r->email, 'password' => $r->password];
      return Auth::attempt($credentials);
    }
}
