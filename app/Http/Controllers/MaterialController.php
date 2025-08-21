<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materiales = Material::paginate(4);
        return view('materiales.index', ['materiales' => $materiales]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('materiales.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $material = new Material([
            'nombre' => $request->get('nombreFormControl'),
            'descripcion' => $request->get('descripcionFormControl'),
            'tipo' => $request->get('tipoFormControl'),
        ]);

        $material->save();

        //return redirect(route('materiales.index'));
        return Redirect::route('materiales.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $material = Material::findOrFail($id);
        return view('materiales.show', ['material' => $material]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $material = Material::findOrFail($id);
        return view('materiales.edit', ['material' => $material]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $material = Material::findOrFail($id);

        $material->nombre = $request->nombreFormControl;
        $material->descripcion = $request->descripcionFormControl;
        $material->tipo = $request->tipoFormControl;

        $material->save();

        return redirect()->route('materiales.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $material = Material::findOrFail($id);
        $material->delete();
        return redirect()->route('materiales.index');
    }
}
