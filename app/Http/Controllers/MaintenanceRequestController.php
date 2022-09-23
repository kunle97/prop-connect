<?php

namespace App\Http\Controllers;

use App\Models\MaintenanceRequest;
use App\Models\Property;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MaintenanceRequestController extends Controller
{
    public function createMaintenanceRequest()
    {
        $properties = Property::where('user_id', Auth::User()->id)->select('user_id', 'id', 'street_address', 'name')->get();
        return view('maintenance/create-maintenance-request', ['properties' => $properties]);
    }
    public function postCreateMaintenanceRequest(Request $request)
    {
        $mr = new MaintenanceRequest();
        $mr->unit_id = $request["unit_id"];
        $mr->user_id = Auth::User()->id;
        $mr->landlord_id = Property::findOrFail($request['property_id'])->user_id;
        $mr->description = $request['description'];
        $mr->resolved = false;
        if ($mr->save()) {
            return redirect('/dashboard/maintenance-requests');
        }
    }
    public function fetchUnits(Request $request)
    {
        $property_id = $request['property_id'];
        return Unit::where('property_id', $property_id)->get()->toJson();
    }

    public function maintenanceRequests()
    {
        $maintenance_requests = MaintenanceRequest::where('landlord_id', Auth::User()->id)->orderBy('created_at', 'desc')->get();
        return view('maintenance/maintenance-requests', ['maintenance_requests' => $maintenance_requests]);
    }

    public function resolveMaintenanceRequest($maintenance_request_id)
    {
        $mr = MaintenanceRequest::findOrFail($maintenance_request_id);
        $mr->resolved = !$mr->resolved;
        if ($mr->update()) {
            return redirect()->back();
        }
    }
}
