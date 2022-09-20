<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TenantController extends Controller
{
    public function tenants()
    {
        return view('tenants/tenants');
    }
    public function manageTenant()
    {
        return view('tenants/manage-tenants');
    }
}
