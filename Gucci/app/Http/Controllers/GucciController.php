<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gucci;
use App\Models\Material;
use App\Models\Designer;
use App\Models\Sale;

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

    // xác thực dữ liệu đầu vào.
    protected function validator(array $data)
{
    return Validator::make($request,[
        'name'=>['required','string'],
        'price'=>['required','double'],
        'material'=>['required','string'],
        'biography'=>['required','string'],
        'photo'=>['required','image|photo|mimes:jpeg,jpg,png'],
    ]);
}
//lưu hình ảnh vào storage
protected function storeImage(Request $request) {
    $path = $request->file('photo')->store('public/profile');
    return substr($path, strlen('public/'));
  }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $designer=Designer::all();
        $material=Material::all();
        $sale=Sale::all();
        return view('gucci.create',[
            'material'=>$material,
            'designer'=>$designer,
            'sale'=>$sale,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $gucci=new Gucci;
        $gucci->name=$request->name;
        $gucci->price=$request->price;
        $gucci->material_id=$request->material;
        $gucci->designer_id=$request->designer;
        $gucci->biography=$request->biography;
        $photo=$request->file('photo')->store('public');

        $gucci->photo=substr($photo,strlen('public/'));
        $gucci->save();
        $gucci->sales()->attach($request->sales);
        return redirect('gucci');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $gucci=Gucci::find($id);
        $designer=Designer::all();
        $material=Material::all();
        $sale=Sale::all();
        return view('gucci.show',[
            'gucci' => $gucci,
            'material' => $material,
            'designer' => $designer,
            'sale' => $sale,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $gucci=Gucci::find($id);
        $designer=Designer::all();
        $material=Material::all();
        $sale=Sale::all();
        return view('gucci.edit',[
            'gucci' => $gucci,
            'material' => $material,
            'designer' =>$designer,
            'sale' =>$sale,
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
        $gucci->designer_id=$request->designer;
        $gucci->sales()->sync($request->sales);
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
