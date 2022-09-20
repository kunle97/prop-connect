<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function properties()
    {
        return view('properties/properties');
    }
    public function addProperty()
    {
        return view('properties/add-property');
    }
    public function manageProperty()
    {
        return view('properties/manage-property');
    }
    public function addUnit()
    {
        return view('properties/add-unit');
    }
}
