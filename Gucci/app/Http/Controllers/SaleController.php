<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sale =  Sale::all();
        return view('sale.index',['sale' => $sale]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("sale.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sale = new Sale();

        $sale ->name = $request->name;
        $sale ->content = $request->content;

        $sale ->save();

        return redirect('/sale');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sale = Sale::find($id);
        return view('sale.show',['sale' => $sale]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sale = Sale::find($id);
        return view('sale.edit',['sale' => $sale]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sale = Sale::find($id);

        $sale ->name = $request->name;
        $sale ->content = $request->content;

        $sale ->save();

        return redirect('/sale');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sale = Sale::find($id);

        $sale->delete();

        return redirect('/sale');
    }
}