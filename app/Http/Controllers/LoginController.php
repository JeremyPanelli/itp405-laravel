<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
      return view('login');
    }
    public function login() {
      $login = Auth::attempt([
      'email' => request('email'),
      'password' => request('password')
      ]);
      if($login)
      {
          return redirect('/profile');
      } else
      {
          return redirect('/login');
      }
    }
    public function logout() {
      Auth::logout();
      return redirect('/login');
    }
}
