<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Users;
 
class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }
    
    public function store()
    {
        $this->validate(request(), [
            'nama' => 'required',
            'nim' => 'required',
            'departemen' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);
        
        $user = Users::create(request(['nama', 'nim', 'departemen', 'email', 'password']));
        
        auth()->login($users);
        
        return redirect()->to('/?');
    }
}