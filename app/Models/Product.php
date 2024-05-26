<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'precio',
        'descripción',
        'cantidad',
    ];

    public function warehouse() {
        return $this->belongsToMany('App\Models\Warehouse');
    }
    
}
