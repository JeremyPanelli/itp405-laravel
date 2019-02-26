<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD

class AdminController extends Controller
{
    public function index() {
      return view('admin/profile', [
          'user' => Auth::user()
=======
use Auth;

class AdminController extends Controller
{
    public function index(){
      return view('admin/profile', [
        'user' => Auth::user()
>>>>>>> itp-405-laravel
      ]);
    }
}
