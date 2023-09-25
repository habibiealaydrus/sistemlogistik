<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\datapengirimanpaket;
use Illuminate\Pagination\Paginator;

class warehouseController extends Controller
{
public function index()
{
    $datainput=datapengirimanpaket:: paginate(3);
        Paginator::useBootstrapFive();
    return view('warehouse',['datainputpaket'=>$datainput]);
}
}
