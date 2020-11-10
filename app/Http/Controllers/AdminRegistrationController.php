<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Admin;
 
class AdminRegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }
    
    public function store()
    {
        $this->validate(request(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        $admin = Admin::create(request(['email', 'password']));
        
        return redirect()->to('/?');
    }
}