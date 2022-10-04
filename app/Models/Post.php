<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function data(){
        return collect([
            ["name"  => "Amjad", "title" => "Web Developer"],
            ["name"  => "Imran", "title" => "Car Mechanic"],
            ["name"  => "Saqib", "title" => "Taxi Driver"],
            ["name"  => "Haroon", "title" => "Ingenier"],
        ])->pluck('name');
    }
}
