<?php

namespace App\Http\Controllers;

use App\Models\Buku;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class BukuController extends Controller
{
    public function show() {
       $data['buku'] = Buku::all();
       $data['total'] = Buku::count();
       return view('index', $data);
    }

    public function search(Request $request) {
        $data['buku'] = Buku::where('judul', $request->cari)->onWhere('favorite', $request->cari)->get();
        $data['total'] = $data['buku']->count();
        return view('/index',$data);
    }

    public function create() {
        return view('bukucreate');
    }

    public function add(Request $request) {
        // $request->validate([
        //     'judul' => 'required',
        //     'isi' => 'required',
        //     'favorite' => 'required',
        //     'foto' => 'image'
        // ]);

        $filename = '';
        if ($request->file('foto')) {
            $extfile = $request->file('foto')->getClientOriginalExtension();
            $filename = time().".".$extfile;
            $request->file('foto')->storeAs('foto',$filename);
        }
        $buku = Buku::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'favorite' => $request->favorite,
            'foto' => $filename
        ]);
        if ($buku) {
            Session::flash('pesan','Data berhasil ditambahkan');
        }else{
            Session::flash('pesan','Data gagal ditambahkan');
            
        }
        return redirect('/index');
    }
    
    public function edit(Request $request) {
        $data['buku'] = Buku::find($request->id);
        return view('bukuedit',$data);
    }

    public function delete(Request $request) {
        $buku = Buku::find($request->id);
        $delete = Buku::where('id', $request->id)->delete();
        if ($delete) {
            if ($buku->foto) {
                Storage::delete('foto/'.$buku->foto);
            }
            Session::flash('pesan','Data berhasil di hapus');
        }else{
            Session::flash('pesan','Data gagal ditambkan');
        } 
        return redirect('/index');
    }
    public function update(Request $request) {
        $buku = Buku::find($request->id);

        $filename = '';
        if ($request->file('foto')) {
            $extfile = $request->file('foto')->getClientOriginalExtension();
            $filename = time() ."." .$extfile;
            $request->file('foto')->storeAs('foto', $filename);
        }
        $update = Buku::where('id', $request->id)->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'favorite' => $request->favorite,
            'foto' => $filename
        ]);
        if ($update) {
            Session::flash('pesan', 'Data berhasil diubah');
        }else{
            Session::flash('pesan','Data gagal diubah');
        }
        return redirect('/index');
    }
    public function dasboard(){
        return view('dasboard');
    }
}
