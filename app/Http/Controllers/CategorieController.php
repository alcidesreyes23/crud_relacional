<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("categories.index");
    }

    public function cargarDatos()
    {
        //listado
        //$data = Persona::orderBy('id', 'DESC')->get();
        if (request()->ajax()) {
            $data = Categorie::all();
            return response()->json($data);
        }
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
        if ($request->ajax()) {
            
            $newData = new Categorie();
            $newData->nombre = $request->nombre;    
            $newData->save();

            return response()->json();
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $categorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
         //obtener los datos
         if (request()->ajax()) {
            $data = Categorie::findOrFail($id);
            return response()->json($data);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorie $categorie)
    {
        if (request()->ajax()) {
            $data = request()->except('_token');
            $array = ([
                'nombre' => $data['nombre']
            ]);
            Categorie::where('id', '=', $request->id)->update($array);
            return response()->json($data);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //eliminar
        if (request()->ajax()) {
            Categorie::destroy($id);
            return response()->json();
        }
    }
}
