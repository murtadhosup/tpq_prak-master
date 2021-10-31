<?php

namespace App\Http\Controllers;
use App\Models\Santri;
use Illuminate\Http\Request;

class SantriController extends Controller
{
     
        public function index() {
      
            $Santris = Santri::all();
            return view('Santri.index',['Santris' => $Santris]);
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

