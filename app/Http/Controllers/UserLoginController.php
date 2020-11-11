
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserLoginController extends Controller
{
  public function getLogin()
  {
    return view('login');
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
    if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password])) {
        return redirect()->intended('/user');
    }

  }

  public function logout()
  {
    if (Auth::guard('user')->check()) {
        Auth::guard('user')->logout();
    }

    return redirect('/');

  }
}