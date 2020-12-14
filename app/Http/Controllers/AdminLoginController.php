<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;

class AdminLoginController extends Controller
{
  public function getLogin()
  {
    return view('dashboard');
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

    if (auth()->guard('admin')->attempt(['email' => $request->email, 'password' => $request->password ])) {
      return redirect()->route('admin-dashboard');
  }

  return back()->withErrors(['email' => 'Email atau Kata Sandi Salah!']);

  }

  public function logout()
  {
    if (Auth::guard('admin')->check()) {
        Auth::guard('admin')->logout();
    }

    return redirect('/');

}
}