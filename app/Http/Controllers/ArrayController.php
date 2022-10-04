<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\DataArray;
use Illuminate\Http\Request;

class ArrayController extends Controller
{
    public function index()
    {
        $options = new DataArray();
        $options = $options->data();
        sort($options);
        return view('array',compact('options'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'options' => 'required',
        ]);
        Car::create($request->all());
        return redirect('test')->withInput()->with('status','User created succesfully!');
    }
}
