<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_catalogo;
use Cart;

class CartController extends Controller{
    public function shop(){
        $datos['catalogo'] = tbl_catalogo::paginate(60);
        return view('updates.carrito.catacarrito', $datos);
    }

    public function cart(){
        $cartCollection = Cart::getContent();
        return view('updates.carrito.carrito')->with(['cartCollection'=>$cartCollection]);
    }

    public function store(Request $request){
        $products = tbl_catalogo::find($request->products_id);
        Cart::add(
            $products->id_catalogo,
            $products->nombrep,
            $products->precio,
            1,
            array('imagen'=>$products->foto,
                'descripcion'=>$products->contenido_neto)
        );
        return back();
    }

    public function remove(Request $request){
        // $products = tbl_catalogo::where('id', $request->id_catalogo)->firstOrFail();
        Cart::remove(['id'=>$request->id]);
        return back();
    }

    public function clear(){
        Cart::clear();
        return back();
    }

    public function update(Request $request){
        Cart::update($request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
            ));
        return back();
    }
}