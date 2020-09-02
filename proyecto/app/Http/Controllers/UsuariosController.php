<?php

namespace App\Http\Controllers;

use App\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $usuarios = Usuarios::all();
        return $usuarios;
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuarios = Usuarios::create($request->all());
        return $usuarios;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        return Usuarios::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\servicios  $servicios
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuarios = Usuarios::findOrFail($id);
        $usuarios->update($request->all());
        return $usuarios;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuarios = Usuarios::findOrFail($id);
        $usuarios->delete();

        return 204;
    }
}
