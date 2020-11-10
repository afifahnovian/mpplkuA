
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Auth;

class AdminLoginController extends Controller
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
    if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
        // if successful, then redirect to their intended location
      return redirect()->intended('/admin');
    } 

  }

  public function logout()
  {
    if (Auth::guard('admin')->check()) {
      Auth::guard('admin')->logout();
    }

    return redirect('/');

  }
}