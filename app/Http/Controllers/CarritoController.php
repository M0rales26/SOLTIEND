<?php

namespace App\Http\Controllers;

use App\Models\tbl_catalogo;
use Illuminate\Http\Request;

class CarritoController extends Controller{
    public function index(){
        $datos['catalogo'] = tbl_catalogo::paginate(50);
        return view('updates.carrito.catacarrito', $datos);
    }
}
