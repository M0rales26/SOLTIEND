<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\tbl_rol;

class RegisterController extends Controller{
    //
    public function create(){
        $rol = tbl_rol::all();
        return view('auth.register', compact('rol'));
    }

    public function store(){
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'rol_id' => 'required',
        ]);

        $user = User::create(request(['name','email','password','rol_id']));
        auth()->login($user);
        return redirect()->to('/');
    }
}
