<?php

namespace App\Http\Controllers;

use App\Models\datapengirimanpaket;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
   public function index()
   {
      $datapesananpaket=datapengirimanpaket::all();
      return view('beranda',['reportpesanan'=>$datapesananpaket ]);
   }
}
