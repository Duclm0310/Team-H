<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Facades\Route;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data=Role::all();
        $result=array();
        foreach($data as $dt){
            $result[$dt->id] = $dt;
            $result[$dt->id]->permissions = json_decode($dt->permissions);
        }

        return view('role.index',
    ['data'=>$result]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        $routes=[];

        $all=Route::getRoutes();
        foreach ($all as $value) {
            if($value->getName()!=""){
                $routes[]= $value->getName();
            }
            
        }
// return $routes;
        return view('role.create',
    compact('routes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
        ],['name.required'=>"Do not empty"]);
        // array_push($this->route,'gucci.index');
        //database k luu duoc mang nen luu thanh chuoi bang json_encode
        $routes=json_encode($request->route);
        Role::create(['name'=>$request->name,
    'permissions'=>$routes]);

        return redirect()->route('role.index')->with('success','Add succeed');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
