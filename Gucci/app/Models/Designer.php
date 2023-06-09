<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designer extends Model
{
    use HasFactory;
    protected $table='designers';
    protected $fillable=[
        'name','style','email',
    ];

    public function guccis(){
        return $this->hasMany(Gucci::class);
    }
}
