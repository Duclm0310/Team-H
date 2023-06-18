<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\UserRole;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=User::all();
        return view('user.index',
    ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $role=Role::all();
        return view('user.create',[
            'role' => $role
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $data=[
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
        ];
        if($user=User::create($data)){
            if(is_array($request->role)){
                foreach($request->role as $role_id){
                    UserRole::create(['user_id'=>$user->id, 'role_id'=>$role_id]);
                }
            }
            return redirect('/user');
        }
        // User::create($request->all());
        
        // // $credentials = $request->only('name', 'email', 'password');
        // // auth()->attempt($credentials);
        // return redirect('/user');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //lay nam cua role. Pluck
        $role_assigments=$user->getRoles->pluck('name','id')->toArray();
        $roles=Role::orderBy('name','ASC')->get();
        return view('user.edit',
    compact('roles','user','role_assigments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $rules=[
            'name'=>'required',
            'email'=>'required|email|unique:users,email,'.$user->id, //update email nhma tru id co's
        ];
        $request->validate($rules);
        $data=[
            'name'=>$request->name,
            'email'=>$request->email,
            'role'=>$request->role,
        ];

        $user->update($data);

        if(is_array($request->role)){
            UserRole::where('user_id',$user->id)->delete();
            foreach($request->role as $role_id){
                UserRole::create(['user_id'=>$user->id, 'role_id'=>$role_id]);
            }
        }
        return redirect('user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user=User::find($id);

        $user->delete();

        return redirect('/user');
    }
}
