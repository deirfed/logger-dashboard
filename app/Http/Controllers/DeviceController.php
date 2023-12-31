<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function index()
    {
        return view('admin.masterdata.device.index');
    }
    public function create()
    {
        return view('admin.masterdata.device.create');
    }
}
