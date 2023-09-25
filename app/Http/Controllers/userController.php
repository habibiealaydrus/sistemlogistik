<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\User;

use Illuminate\Http\Request;
use illuminate\Database\Eloquent\Model;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Pagination\Paginator;


class userController extends Controller
{
    public function index()
    {
        $data= User::paginate(5);
        Paginator::useBootstrapFive();
        
        $optionLevel= Level::all();
        
        
        return view('userlist',
        ['data'=>$data, 
        'dataoption'=>$optionLevel
        ]);
    }
    public function createuser(Request $request)
    {
        
        $request= User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'level' => $request['level'],
            'password' => Hash::make($request['password']),
        ]);
        
        // dd($request->all());
        if($request){
            Session::flash('status', 'success');
            Session::flash('button', 'success');
            Session::flash('massage', 'data berhasil bertambah');
        }
        return redirect('/user');
    }
    // public function edit($id)
    // {
    //     $data = user::findOrFail($id);
    //     $optionLevel= Level::where('id', '!=', $data->level)->get(['id','name']);
    //     return view('edit', ['data' => $data,'dataoption' =>  $optionLevel]);
    // }
    public function update(Request $request, $id)
    {
        $data = user::findOrFail($id);
        $data->update($request->all());
        return redirect('/user');
    }
    public function confirmdelete(Request $request, $id)
    {
        $data = user::findOrFail($id);
        return view('/confirmdelete', ['data' => $data]);
    }
    public function destroy($id)
    {
        $deletedData = user::findOrfail($id);
        $deletedData-> delete();
        if($deletedData){
            Session::flash('status', 'deleted');
            Session::flash('button', 'danger');
            Session::flash('massage', 'data berhasil terhapus');
        }
        return redirect('/user');
    }
}
