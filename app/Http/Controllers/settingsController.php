<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisPengiriman;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Pagination\Paginator;

class settingsController extends Controller
{
    public function index()
    {
        $data=JenisPengiriman::paginate(5);
        // dd($data);
        return view ('settings',['data'=>$data]);
    }
    public function create(Request $request)
    {
        $datajenispengiriman = JenisPengiriman::create($request->all());
        if($datajenispengiriman){
            Session::flash('status', 'success');
            Session::flash('button', 'success');
            Session::flash('massage', 'Jenis Pengiriman bertambah');
        }
        return redirect('/settings');
    }
    public function destroy(Request $request, $id)
    {
        $deletedData = JenisPengiriman::findOrfail($id);
        $deletedData-> delete();
        if($deletedData){
            Session::flash('status', 'deleted');
            Session::flash('button', 'danger');
            Session::flash('massage', 'jenis Kiriman terhapus');
        }
        return redirect('/settings');
    }
}