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
        $page_name = 'Properties Page';
        $properties = Property::query()->where('status',1)->paginate(4);
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
            'locations' => $locations,
            'page_name'=> $page_name

        ]);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $title)
    {
        $page_name = $title;
        $property = Property::query()->where('title','=',$title)->first();

//        dd($property);

        return view('properties.show',['item'=> $property,'page_name'=>$page_name]);
    }


}
