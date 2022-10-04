<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataArray extends Model
{
    use HasFactory;

    public function data()
    {
        $cars = ['2'=>'Toyota','162'=>'Ferrari','17'=>'Audi Q7'];
        return $cars;
    }

}
