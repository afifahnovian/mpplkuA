<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class UserLoginController extends Controller
{
  public function getLogin()
  {
    return view('auth.user-login');
  }

  public function postLogin(Request $request)
  {

      // Validate the form data
    $this->validate($request, [
      'email' => 'required|email',
      'password' => 'required'
    ]);

      // Attempt to log the user in
      // Passwordnya pake bcrypt
    // if (Auth::guard('users')->attempt(['email' => $request->email, 'password' => $request->password])) {
    //     return redirect()->intended('/user/dashboard');
    // }

    if (auth()->guard('users')->attempt(['email' => $request->email, 'password' => $request->password ])) {
      return redirect()->route('user-dashboard');
  }

  return back()->withErrors(['email' => 'Email atau Kata Sandi Salah!']);

  }

  public function logout()
  {
    if (Auth::guard('users')->check()) {
        Auth::guard('users')->logout();
    }

    return redirect('/');

  }
}