<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Transaction;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class PropertyController extends Controller
{
    public function properties()
    {
        $properties =  Property::where('user_id', Auth::User()->id)->get();

        $property_profits = [];

        foreach ($properties as $property) {
            $total_revenue = 0;
            $transactions = Transaction::where('property_id', $property->id)->where('type', 'rent')->get();
            foreach ($transactions as $transaction) {
                $total_revenue += $transaction->amount;
            }
            $property_profits = array_merge($property_profits, [$property->id => $total_revenue]);
        }

        return view('properties/properties', ['properties' => $properties, 'property_profits' => $property_profits]);
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
    public function createPropery(Request $request)
    {
        $property = new Property();
        $property->name  = $request['name'];
        $property->street_address  = $request['address'];
        $property->city  = $request['city'];
        $property->state  = $request['state'];
        $property->zip  = $request['zip'];
        $property->mls_number  = $request['mls_number'];
        $property->user_id  = Auth::User()->id;

        if ($property->save()) {
            //Handle adding units
            $unit_names = $request['unit_names'];
            $unit_beds = $request['unit_beds'];
            $unit_baths = $request['unit_baths'];
            foreach ($unit_names as $key => $name) {
                $unit = new Unit();
                $unit->name = $name;
                $unit->beds = $unit_beds[$key];
                $unit->baths = $unit_baths[$key];
                $unit->property_id = $property->id;
                $unit->save();
            }
            return redirect('/dashboard/properties');
        } else {
            return Redirect::back()->withErrors(['msg' => 'Error Creating Property']);
        }
    }
    public function createUnit(Request $request)
    {
        //Handle adding units
        $unit_names = $request['unit_names'];
        $unit_beds = $request['unit_beds'];
        $unit_baths = $request['unit_baths'];
        $property_id = $request['property_id'];
        foreach ($unit_names as $key => $name) {
            $unit = new Unit();
            $unit->name = $name;
            $unit->beds = $unit_beds[$key];
            $unit->baths = $unit_baths[$key];
            $unit->property_id = $property_id;
            $unit->save();
        }
        if ($unit->save()) {
            return redirect()->back();
        } else {
            return Redirect::back()->withErrors(['msg' => 'Error Creating Unit']);
        }
    }
}
