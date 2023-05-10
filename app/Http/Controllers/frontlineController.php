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
        $optionKirim=JenisPengiriman::all();

        return view('frontline',['datainputpaket'=>$datainput,'optionkirim'=>$optionKirim]);
    }
    public function createpengiriman(Request $request)
    {
        $datapengirimanpaket= datapengirimanpaket::create($request->all());
        if($datapengirimanpaket){
            Session::flash('status', 'success');
            Session::flash('button', 'success');
            Session::flash('massage', 'Pengiriman bertambah');
        }
        return redirect('/frontline');
    }
    public function update(Request $request, $id)
    {
        $data = datapengirimanpaket::findOrFail($id);
        $data ->update($request->all());
        return redirect('/frontline');
    }
    public function destroy($id)
    {
        $deletedData = datapengirimanpaket::findOrfail($id);
        $deletedData-> delete();
        if($deletedData){
            Session::flash('status', 'deleted');
            Session::flash('button', 'danger');
            Session::flash('massage', 'data berhasil terhapus');
        }
        return redirect('/frontline');
    }
}
