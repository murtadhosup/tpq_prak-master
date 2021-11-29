<?php

namespace App\Http\Controllers;
use App\Models\Santri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SantriController extends Controller
{
     
        public function index() {
      
            $Santris = Santri::all();
            return view('Santri.index',['Santris' => $Santris]);
        }
        
        public function add(){

            return view('Santri/create ');
        }
    
        public function store(Request $request)
        {
            DB::table('santri')->insert([
                'id_Santri' => $request->id_Santri,
                'nama_santri' => $request->nama_santri,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tanggal_lahir' => $request->tanggal_lahir,
                'kota_lahir' => $request->kota_lahir,
                'nama_ortu' => $request->nama_ortu,
                'alamat_ortu' => $request->alamat_ortu,    
                'no_hp' => $request->no_hp,
                'email' => $request->email,
                'password' => $request->password,
                'tanggal_masuk' => $request->tanggal_masuk,
                'aktif' => $request->aktif,         
            ]);
            return redirect('Santri');
        }
        
        public function delete($id_Santri){
            $Santri=Santri::find($id_Santri);
            // echo $santri;
            $Santri->delete();
            return Redirect('/Santri');

        }
        public function edit ($id_Santri){
            $Santri = \App\Models\Santri::find($id_Santri);
            return view('Santri/edit',['Santri' => $Santri]);
        }
    
        public function update (Request $request,$id_Santri){
            $Santri = \App\Models\Santri::find($id_Santri);
            $Santri->update($request->all());
            return redirect('/Santri')->with('sukses','Data Berhasil diupdate');
        }
    }

