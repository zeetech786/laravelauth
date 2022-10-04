<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;
    protected $guarded= [];
    protected $table = 'profile';
    public  $timestamps  = false;

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'income' => 'required',
            'image'=> 'required|mimes:jpg,png,jpeg|max:5048',
        ];
    }
}
