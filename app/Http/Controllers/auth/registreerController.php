<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class registreerController extends Controller
{
    public function index(){
        return view('auth.registreren');
    }

    public function store(Request $request){
        
        $this->validate($request,[
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'firstname' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed',
        ]);
        User::create([
            'naam' => $request->name,
            'gebruikersnaam' => $request->username,
            'voornaam' => $request->firstname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    }
}
