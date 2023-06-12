<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $material=Material::all();
        return view('material.index',[
            'material' => $material,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('material.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $material=new Material;

        $material->name=$request->name;
        $material->uses=$request->uses;

        $material->save();

        return redirect('material');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $material=Material::find($id);
        return view('material.show',[
            'material' => $material,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $material=Material::find($id);
        return view('material.edit',[
            'material' => $material,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $material=Material::find($id);

        $material->name=$request->name;
        $material->uses=$request->uses;

        $material->save();

        return redirect('material');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $material=Material::find($id);
        $material->delete();
        return redirect('material');
    }
}
