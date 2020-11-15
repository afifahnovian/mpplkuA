<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function getLogin()
  {
    return view('dashboard');
  }

  public function postLogin(Request $request)
  {
    dd($request->all);
  }
}
