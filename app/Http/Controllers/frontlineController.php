<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisPengiriman;
use Illuminate\Routing\Controller;
use App\Models\datapengirimanpaket;
use Illuminate\Support\Facades\Session;
use Illuminate\Pagination\Paginator;


class frontlineController extends Controller
{
    public function index()
    {
        $datainput=datapengirimanpaket:: paginate(3);
        Paginator::useBootstrapFive();

        return view('frontline',['datainputpaket'=>$datainput]);
    }
    public function inputpengiriman()
    {
        $optionKirim= JenisPengiriman::all();
        return view('/formInputPengiriman',['optionkirim'=>$optionKirim]);
    }
    public function createpengiriman(Request $request)
    {
        $datapengirimanpaket= datapengirimanpaket::create($request->all());
        if($datapengirimanpaket){
            Session::flash('status', 'success');
            Session::flash('button', 'success');
            Session::flash('massage', 'Jenis Pengiriman bertambah');
        }
        return redirect('/frontline');
    }
}
