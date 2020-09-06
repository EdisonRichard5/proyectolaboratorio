<?php

namespace App\Http\Controllers;

use App\servicios;
use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicios = Servicios::all();
        return $servicios;
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
        $servicios = Servicios::create($request->all());
        return $servicios;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        return Servicios::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function edit(servicios $servicios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $servicios = Servicios::findOrFail($id);
        $servicios->update($request->all());
        return $servicios;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servicios = Servicios::findOrFail($id);
        $servicios->delete();

        return 204;
    }
}
