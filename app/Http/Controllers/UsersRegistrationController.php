<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controllers;
use Illuminate\Foundation\Auth\RegistersUsers;
 
class UsersRegistrationController extends Controller
{
    public function create()
    {
        return view('auth.user-register');
    }
    
    public function store()
    {
        $this->validate(request(), [
            'nama' => 'required',
            'nim' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        $user = User::create(request(['nama', 'nim', 'email', 'password']));
        
        //auth()->login($user);
        
        return redirect()->to('/user/login');
    }
}
