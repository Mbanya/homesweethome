<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\HouseType;
use App\Models\Property;
use App\Models\SaleType;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $properties = Property::query()->where('status',1)->paginate(6);
        $housetypes = HouseType::query()->get();
        $saletypes = SaleType::query()->get();

        $city_ids = Property::query()->where('status','=',1)
            ->get()
            ->pluck('city_id');
        $locations  = City::query()->whereIn('id',$city_ids)->get();
        return view('properties.index',[
            'properties'=>$properties,
            'housetypes' => $housetypes,
            'saletypes'=>$saletypes,
            'locations' => $locations

        ]);
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
