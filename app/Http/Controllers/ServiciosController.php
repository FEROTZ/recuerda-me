<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicios;

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
        return view('landingpage.servicio.servicios')->withServicios($servicios);
    }

    public function indexAdmin(){
        $datos['servicios']=Servicios::paginate(10);
        return view('service.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$datosServicios=request()->all();
        $datosServicios=request()->except('_token');//Retira el token que genera el formulario -@csrf
        Servicios::insert($datosServicios);
        return response()->json($datosServicios);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit (Servicios $id)
    {
        $servicio=Servicios::findOrFail($id);
        return view ('service.edit', compact('servicio'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    Servicios::destroy($id);
    // return  redirect('service.index');
     $servicio=Servicios::find($id);
     $servicio->delete();
    }
}
