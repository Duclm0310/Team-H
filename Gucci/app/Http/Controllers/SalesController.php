<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Sales =  Sales::all();
        return view('Sale.index',['Sales' => $Sales]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Sale.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Sales = new Sales();

        $Sales->name = $request->name;
        $Sales->date = $request->date;
        $Sales->content = $request->content;

        $Sales->save();

        return redirect('/Sales');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Sales = Sales::find($id);
        return view('Sale.show',['Sales' => $Sales]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Sales = Sales::find($id);
        return view('Sale.edit',['Sales' => $Sales]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Sales = Sales::find($id);

        $Sales->name = $request->name;
        $Sales->date = $request->date;
        $Sales->content = $request->content;

        $Sales->save();

        return redirect('/Sales');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Sales = Sales::find($id);

        $Sales->delete();

        return redirect('/Sales');
    }
}
