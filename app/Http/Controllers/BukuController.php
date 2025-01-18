<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function tampil()
    {
        $buku = buku::all();  
        return View('admin.buku.tampil', compact('buku'));
    }
    
    public function tambah()
    {
        return view('admin.buku.tambah');
    }
    public function edit($id)
    {
        $buku=buku::findOrFail($id);
        return view('admin.buku.edit' , compact('buku'));
    }
    public function post(Request  $request)
    {

        $id =$request->get('id');
        if ($id) {
        
            $buku = buku::find($id);
        } else  {
        
            $buku = new buku;
        }
        $buku->nama_buku=$request->get('nama_buku');
        $buku->jenis=$request->get('jenis');
        $buku->tanggal=$request->get('tanggal');
        $buku->jumlah_buku=$request->get('jumlah_buku');
        $buku->save();
        return redirect()->route('admin.buku.tampil');
    }
    public function delete($id)
    {
        $buku = buku::findOrFail($id);
        $buku->delete();
        
        return redirect()->route('admin.buku.tampil');
    }
}

