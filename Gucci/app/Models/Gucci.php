<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gucci extends Model
{
    use HasFactory;
    protected $table='guccis';
    protected $fillable=[
        'name','price','biography',
    ];

    public function material(){
        return $this->belongsTo(Material::class);
    }
}
