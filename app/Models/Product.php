<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function customers(){

        return $this->belongsToMany('App\Models\Customer'); // MUCHOS A MUCHOS
    }

    public function Suppliers(){

        return $this->hasMany('App\Models\Supplier'); //RELACION UNO A MUCHOS

    }

}
