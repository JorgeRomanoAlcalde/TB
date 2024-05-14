<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;

    public function product() {
        return $this->belongsToMany('App\Models\Product');
    }

    public function local() {
        return $this->belongsTo('App\Models\Local');
    }
        
}
