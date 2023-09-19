<?php

namespace App\Http\Controllers\Chefservice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Chef_serviceController extends Controller
{
    public function index()
    {
        return view('chef_service.index');
    }
}
