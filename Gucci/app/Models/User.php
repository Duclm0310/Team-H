<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Route;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function hasPermission($route){
        $routes=$this->routes();
        return in_array($route, $routes)? true : false;
    }
    // public function routes(){
    //     return ['gucci.index'];
    // }

    //fix cacs route user can use
    public function routes(){
        $data=[];

        foreach($this->getRoles as $role){
            $permission=json_decode($role->permissions);
            foreach($permission as $per){
                if(!in_array($per,$data)){
                    array_push($data,$per);
                } //k nam trong thi up
            }
            
        }
        return $data;
    }
    //get role
    public function getRoles(){
        return $this->belongsToMany(Role::class,'user_roles','user_id','role_id');
    }

    //     public function routes() 
//     {
//         return ['category.index', 'admin.index']
//     }

// public function getRoles() {
//     return $this->belongsToManyong(Role::class, 'user_roles', 'user_id', 'role_id');
// }


//Buy product
public function buys(){
    return $this->hasMany(Buy::class);
}
}
