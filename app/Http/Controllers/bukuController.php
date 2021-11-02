<?php

namespace App\Http\Controllers;
use App\Models\buku;
use Illuminate\Http\Request;
class bukuController extends Controller
{
    public function index() {
      
        $buku = buku::all();
        return view('buku.index',['buku' => $buku]);
    }

    public function delete($id_buku){
        $buku=buku::find($id_buku);
        // echo $buku;
        $buku->delete();
        return Redirect('/buku');

    }
    public function edit ($id_buku){
    $buku = \App\Models\buku::find($id_buku);
    return view('buku/edit',['buku' => $buku]);
    }
    public function update (Request $request,$id_buku){
        $buku = \App\Models\buku::find($id_buku);
        $buku->update($request->all());
        return redirect('/buku')->with('sukses','Data Berhasil diupdate');
    }
}
