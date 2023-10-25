<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mascotas = Mascota::all();
        return view("mascotas.index", compact("mascotas"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("mascotas.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mascota          = new Mascota();
        $mascota->nombre  = $request->nombre;
        $mascota->especie = $request->especie;
        $mascota->edad    = $request->edad;
        $mascota->save();
        return redirect()->route("mascotas.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Mascota $mascota)
    {
        return view("mascotas.show", compact("mascota"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mascota $mascota)
    {
        return view("mascotas.edit", compact("mascota"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mascota $mascota)
    {
        $mascota->nombre  = $request->nombre;
        $mascota->especie = $request->especie;
        $mascota->edad    = $request->edad;
        $mascota->save();
        return redirect()->route("mascotas.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mascota $mascota)
    {
        $mascota->delete();
        return redirect()->route("mascotas.index");
    }
}
