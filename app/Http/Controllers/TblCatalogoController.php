<?php

namespace App\Http\Controllers;

use App\Models\tbl_catalogo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TblCatalogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $datos['catalogo'] = tbl_catalogo::where('usuario_id', auth()->user()->id_usuario)->get();
        return view('updates.product.catalogo', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('updates.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $datoscatalogo = request()->except('_token');
        //
        if ($imagen = $request->file('foto')) {
            $rutaguardarimg = 'foto/';
            $imagenprod = date('YmdHis') . "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaguardarimg, $imagenprod);
            $datoscatalogo['foto'] = $imagenprod;
        }
        //
        tbl_catalogo::insert($datoscatalogo);
        return redirect()->route('catalogo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tbl_catalogo  $tbl_catalogo
     * @return \Illuminate\Http\Response
     */
    public function show(tbl_catalogo $tbl_catalogo){
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tbl_catalogo  $tbl_catalogo
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $catalogo = tbl_catalogo::find($id);
        return view('updates.product.edit', compact('catalogo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tbl_catalogo  $tbl_catalogo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $datoscatalogo = request()->except(['_token', '_method']);
        //
        if ($imagen = $request->file('foto')) {
            $rutaguardarimg = 'foto/';
            $imagenprod = date('YmdHis') . "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaguardarimg, $imagenprod);
            $datoscatalogo['foto'] = $imagenprod;
        } else {
            unset($datoscatalogo['foto']);
        }
        //
        tbl_catalogo::where('id_catalogo', '=', $id)->update($datoscatalogo);
        return redirect()->route('catalogo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tbl_catalogo  $tbl_catalogo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        //
        tbl_catalogo::destroy($id);
        return redirect()->route('catalogo.index')->with('Eliminado','ok');
    }
}

