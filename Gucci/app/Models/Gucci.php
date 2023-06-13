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
        'photo',
    ];

    public function material(){
        return $this->belongsTo(Material::class);
    }
    public function designer(){
        return $this->belongsTo(Designer::class);
    }
    public function sales(){
        return $this->belongsToMany(Sale::class);
    }
}
