<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaintenanceRequestController extends Controller
{
    public function createMaintenanceRequest()
    {
        return view('maintenance/create-maintenance-request');
    }
    public function maintenanceRequests()
    {
        return view('maintenance/maintenance-requests');
    }
}
