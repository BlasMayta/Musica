<?php

namespace App\Http\Controllers;

use App\Models\Estrofa;
use Illuminate\Http\Request;

class EstrofaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estrofa=Estrofa::all();

        return view('estrofa.index',compact('estrofa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estrofa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosEstro=request()->except('_token');
        //return dd($datosEmp);

        Estrofa::insert($datosEstro);

       // return response()->json($datosEmp);
       return redirect('/estrofas')->with('nuevo','ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estrofa  $estrofa
     * @return \Illuminate\Http\Response
     */
    public function show(Estrofa $estrofa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estrofa  $estrofa
     * @return \Illuminate\Http\Response
     */
    public function edit(Estrofa $estrofa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estrofa  $estrofa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estrofa $estrofa)
    {
        $estrofa->update ($request->all());
        return redirect()->route('estrofa.index')->with('editar','ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estrofa  $estrofa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estrofa $estrofa)
    {
        
    }
}
