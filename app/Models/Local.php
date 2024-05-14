<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    use HasFactory;

    public function aupplier() {
        return $this->belongsToMany('App\Models\Supplier');
    }

    public function warehouse() {
        return $this->hasMany('App\Models\Warehouse');
    }
    
}
