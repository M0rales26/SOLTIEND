<?php

namespace App\Http\Controllers;

use App\Models\tbl_catalogo;
use App\Models\User;
use Illuminate\Http\Request;

class ProductoController extends Controller{
    public function index($id){
        $datos['producto'] = tbl_catalogo::where('usuario_id', $id)->get();
        $user['tendero'] = User::where('id_usuario', $id)->get();
        return view('updates.inftienda.inftienda', $datos, $user);
    }
}
