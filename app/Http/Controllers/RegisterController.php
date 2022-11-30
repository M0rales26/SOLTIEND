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

    public function store(Request $request){
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'rol_id' => 'required',
            'fotop' => 'required',
        ]);

        $datosperfil = request()->except(['password_confirmation','_token']);
        $datosperfil['password'] = bcrypt($request->password);
        if ($imagen = $request->file('fotop')) {
            $rutaguardarimg = 'perfil/';
            $imagenprod = date('YmdHis') . "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaguardarimg, $imagenprod);
            $datosperfil['fotop'] = $imagenprod;
        }

        User::create($datosperfil);
        return redirect()->to('/');
    }

    public function update(Request $request, $id){
        $datoscatalogo = request()->except(['_token', '_method']);
        //
        if ($imagen = $request->file('fotop')) {
            $rutaguardarimg = 'perfil/';
            $imagenprod = date('YmdHis') . "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaguardarimg, $imagenprod);
            $datoscatalogo['fotop'] = $imagenprod;
        } else {
            unset($datoscatalogo['fotop']);
        }
        //
        User::where('id_usuario', '=', $id)->update($datoscatalogo);
        // return redirect()->route('catalogo.index');
    }
}
