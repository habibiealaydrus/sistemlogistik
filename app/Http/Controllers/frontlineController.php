<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisPengiriman;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\datapengirimanpaket;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Session;


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
    public function laporan()
    {
        $datainput=datapengirimanpaket:: paginate(10);
        Paginator::useBootstrapFive();
        $optionKirim=JenisPengiriman::all();

        $data_chart = DB::table('pengirimanpaket')
        ->leftJoin('jenispengiriman','pengirimanpaket.jeniskiriman','=', 'jenispengiriman.id')
        ->select(
            DB::raw('jenispengiriman.name as jeniskiriman'),
            DB::raw('count(*) as number')
            )
        ->groupBy('jenispengiriman.name')
        ->get();
         
        $array[] = ['jeniskiriman', 'Number'];
        foreach($data_chart as $key => $value)
        {
            $array[++$key] = [$value->jeniskiriman, $value->number];
        }
        return view('laporanfrontline',
        [
            'datainputpaket'=>$datainput,
            'jeniskiriman'=> json_encode($array),
        ]);
        
    }
}
