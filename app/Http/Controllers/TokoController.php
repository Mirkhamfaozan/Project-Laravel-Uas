<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Toko;

class TokoController extends Controller {

    public function index() {
        return view('datatoko', [
            'users' => Toko::all(),
            'title' => 'Data toko'
        ]);
    }
    public function add() {
        return view('adddatatoko',[
            'title' => 'Tambah Data toko'
        ]);
    }
    public function edit($id){

        $toko = Toko::where('id', $id)->first();

        return view('editdatatoko', [
            'toko' => $toko,
            'title' => 'Edit Data toko'
        ]);

    }

    public function update(Request $request, $id) {
        $kode_kriteria      = $request->input('kode_kriteria');
        $nama_kriteria       = $request->input('nama_kriteria');
        $nilai_bobot       = $request->input('nilai_bobot');
        $jenis = $request->input('jenis');
        
        $toko = Toko::where('id', $id)->first();
        $toko->kode_kriteria = $kode_kriteria;
        $toko->nama_kriteria     = $nama_kriteria;
        $toko->nilai_bobot = $nilai_bobot; // Don't forget to encryp!s
        $toko->jenis = $jenis;

        $toko->save();

        return redirect()->to('/toko');
    }


    public function dashboard(){
        $toko= Toko::count();

        return view('main', compact('toko'));

    }

    public function store(Request $request) {
        $kode_kriteria      = $request->input('kode_kriteria');
        $nama_kriteria       = $request->input('nama_kriteria');
        $nilai_bobot       = $request->input('nilai_bobot');
        $jenis = $request->input('jenis');
        // TODO: Compare $password and $rePassword

        $toko           = new Toko;
        $toko->kode_kriteria = $kode_kriteria;
        $toko->nama_kriteria     = $nama_kriteria;
        $toko->nilai_bobot = $nilai_bobot; // Don't forget to encryp!s
        $toko->jenis = $jenis;

        $toko->save();

        return redirect()->to('/toko');
    }
    public function delete($id) {
        $toko = Toko::where('id', $id)->first();
        $toko->delete();
        return redirect()->back();
    }
}
