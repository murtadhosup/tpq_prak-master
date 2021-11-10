<?php

namespace App\Http\Controllers\Dashboard;
use App\Models\Santri;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SantriController extends Controller
{
    public function index(){
        $santri = Santri::all();
        return view("dashboard/santri",["data"=>$santri]);
    }

    public function form(){
        return view("dashboard/tambahSantri");
    }

    public function hapus($id_santri){
        Santri::find($id_santri)->delete();
        return redirect('/dashboard/santri');
    }

    public function tambah(Request $request){
        dd($request->nama_santri);
    }

}
