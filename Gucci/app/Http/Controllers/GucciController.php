<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gucci;
use App\Models\Material;

class GucciController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $gucci=Gucci::all();
        return view('gucci.index',
        ['gucci'=>$gucci,
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $material=Material::all();
        return view('gucci.create',[
            'material'=>$material,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $gucci=new Gucci;
        $gucci->name=$request->name;
        $gucci->price=$request->price;
        $gucci->material_id=$request->material;
        $gucci->biography=$request->biography;
        $gucci->save();

        //store image
        // if($request->hasFile('image') && $request->file('image')->isValid()){
        //     $gucci->addMediaFromRequest('image')->toMediaCollection('images');
        // }

        return redirect('gucci');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $gucci=Gucci::find($id);
        $material=Material::all();
        return view('gucci.show',[
            'gucci' => $gucci,
            'material' => $material,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $gucci=Gucci::find($id);
        $material=Material::all();
        return view('gucci.edit',[
            'gucci' => $gucci,
            'material' => $material,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $gucci=Gucci::find($id);
        $gucci->name=$request->name;
        $gucci->price=$request->price;
        $gucci->material_id=$request->material;
        $gucci->biography=$request->biography;
        $gucci->save();

        return redirect('gucci');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $gucci=Gucci::find($id);
        $gucci->delete();
        return redirect('gucci');
    }
}
