<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TiendaController extends Controller{
    public function index(){
        $datos['tiendas'] = User::where('rol_id', 2)->get();
        return view('updates.tiendas.tiendas', $datos);
    }
}
