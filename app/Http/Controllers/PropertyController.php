<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $properties = Property::query()->where('status',1)->get();
        return view('properties.index',['properties'=>$properties]);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $title)
    {
        $property = Property::query()->where('title','=',$title)->get();

        return view('properties.show',['property'=> $property]);
    }


}
