<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class laporanController extends Controller
{
    public function index()
    {
        return view ('laporanspv');
    }
}
