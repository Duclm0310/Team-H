<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Designer;
class DesignerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $designers=Designer::all();
        return view('designer.index',
        ['designers'=>$designers,
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("designer.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $designer = new Designer();

        $designer->name = $request->name;
        $designer->style = $request->style;
        $designer->email = $request->email;

        $designer->save();

        return redirect('designer');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $designer = Designer::find($id);
        return view('designer.show', [
            'designer' => $designer,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $designer = Designer::find($id);
        return view('designer.edit', [
            'designer' => $designer,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $designer = Designer::find($id);
        $designer->name = $request->name;
        $designer->style = $request->style;
        $designer->email = $request->email;
        $designer->save();

        return redirect('/designer');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $designer = Designer::find($id);

        $designer->delete();

        return redirect('/designer');
    }
}
