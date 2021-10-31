<?php

namespace App\Http\Controllers;
use App\Models\pengurus;
use Illuminate\Http\Request;
class pengurusController extends Controller
{
    public function index() {
      
        $pengurus = pengurus::all();
        return view('pengurus.index',['pengurus' => $pengurus]);
    }

    public function delete($id_pengurus){
        $pengurus=pengurus::find($id_pengurus);
        // echo $pengurus;
        $pengurus->delete();
        return Redirect('/pengurus');

    }
    public function edit ($id_pengurus){
    $pengurus = \App\Models\pengurus::find($id_pengurus);
    return view('pengurus/edit',['pengurus' => $pengurus]);
    }
    public function update (Request $request,$id_pengurus){
        $pengurus = \App\Models\pengurus::find($id_pengurus);
        $pengurus->update($request->all());
        return redirect('/pengurus')->with('sukses','Data Berhasil diupdate');
    }
}