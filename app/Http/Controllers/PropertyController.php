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
        $properties =  Property::where('user_id', Auth::User()->id)->orderBy('created_at', 'desc')->get();
        $property_profits = [];

        foreach ($properties as $property) {
            $total_revenue =  $this->calculatePropertyRevenue($property);
            $property_profits = array_merge($property_profits, [$property->id => $total_revenue]);
        }

        return view('properties/properties', ['properties' => $properties, 'property_profits' => $property_profits]);
    }
    public function addProperty()
    {
        return view('properties/add-property');
    }
    public function manageProperty($property_id)
    {
        $property = Property::findOrFail($property_id);
        $units = Unit::where('property_id', $property_id)->orderBy('created_at', 'desc')->get();
        $total_revenue = $this->calculatePropertyRevenue($property);
        return view('properties/manage-property', ['property' => $property, 'units' => $units, 'total_revenue' => $total_revenue]);
    }
    public function addUnit($property_id)
    {
        $property = Property::findOrFail($property_id);
        return view('properties/add-unit', ['property' => $property]);
    }
    public function createProperty(Request $request)
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
            $this->insertUnitsToDB($request);
            return redirect('/dashboard/properties');
        } else {
            return Redirect::back()->withErrors(['msg' => 'Error Creating Property']);
        }
    }
    public function createUnit(Request $request)
    {
        $property_id = $request['property_id'];
        $this->insertUnitsToDB($request);
        return redirect("/dashboard/manage-property/$property_id");
    }
    public function postUpdateProperty(Request $request)
    {
        $property = Property::findOrFail($request['property_id']);
        $property->name =  $request['name'];
        $property->street_address =  $request['address'];
        $property->city =  $request['city'];
        $property->state =  $request['state'];
        $property->country =  $request['country'];
        if ($property->update()) {
            return redirect()->back();
        }
    }

    public function deleteProperty($property_id)
    { // TODO: Check if occupants are in property before delete
        $property = Property::findOrFail($property_id);
        if ($property->user_id == Auth::User()->id) {
            if ($property->delete()) {
                return redirect()->back();
            } else {
                return Redirect::back()->withErrors(['msg' => 'Error Deleting Property']);
            }
        } else {
            return Redirect::back()->withErrors(['msg' => 'You are not authorized to perform this action']);
        }
    }
    public function deleteUnit($unit_id)
    { // TODO: Check if occupants are in unit before delete
        $unit = Unit::findOrFail($unit_id);
        if (Property::findOrFail($unit->property_id)->user_id ==  Auth::User()->id) {
            if ($unit->delete()) {
                return redirect()->back();
            } else {
                return Redirect::back()->withErrors(['msg' => 'Error Deleting Unit']);
            }
        } else {
            return Redirect::back()->withErrors(['msg' => 'You are not authorized to perform this action']);
        }
    }

    //helper functions
    public function calculatePropertyRevenue(Property $property)
    {
        $total_revenue = 0;
        $transactions = Transaction::where('property_id', $property->id)->where('type', 'rent')->get();
        foreach ($transactions as $transaction) {
            $total_revenue += $transaction->amount;
        }
        return $total_revenue;
    }
    public function insertUnitsToDB(Request $request)
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
    }
}
