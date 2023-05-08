<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class warehouseController extends Controller
{
public function index()
{
    return view('warehouse');
}
}
