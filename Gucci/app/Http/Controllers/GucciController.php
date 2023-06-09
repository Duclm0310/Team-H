<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gucci;
use App\Models\Material;
use App\Models\Designer;
use App\Models\Sale;
use App\Models\Buy;
use Illuminate\Support\Facades\Auth;

class GucciController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // dd(Auth::user());
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
        $gucci->count=$request->count;
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
        $gucci->count=$request->count;
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

    public function buy(string $id){
        $gucci=Gucci::find($id);
        $gucci->count=$gucci->count-1;
        $gucci->save();

        $user=Auth::user();
        $buy=new Buy();

        $buy->user_id=$user->id;
        $buy->gucci_id=$gucci->id;
        $buy->buy_date=date('Y-m-d');
        $buy->status='bought';

        $buy->save();
        return redirect('/gucci');
    }

    public function bought(){
        $user=Auth::user();
        $gucci = Gucci::all();
        $buys=Buy::where('user_id',$user->id)
        ->where('status','bought')
        ->get();
        return $buys;
        return view('gucci.bought', ['buys' => $buys, 'user' => $user, 'gucci' => $gucci]);
    }

    public function refund(string $id,Request $request){

            $buy= Buy::find($id);
            $gucci = Gucci::find($buy->gucci->id);
            $gucci->count=$gucci->count+1;
            $gucci->save();
            $user=Auth::user();

            $buy->status=$request->status='refunded';
    
            $buy->save();
            return redirect('/gucci');
        }
    
        public function refunded(){
            $user=Auth::user();
            $buys=Buy::where('user_id',$user->id)
            ->where('status','refunded')
            ->get();
            return $buys;
        }



    public function error(){
        $code=request()->code;
        return view('error');
    }
}
