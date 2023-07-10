<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    public function index() {
        return view('dataalternatif', [
            'users' => Alternatif::all(),
            'title' => 'Data alternatif'
        ]);
    }
    public function add() {
        return view('adddataalternatif',[
            'title' => 'Tambah Data alternatif'
        ]);
    }
    public function edit($id){
        
        $alternatif = Alternatif::where('id', $id)->first();

        return view('editdataalternatif', [
            'alternatif' => $alternatif,
            'title' => 'Edit Data alternatif'
        ]);

    }

    public function update(Request $request, $id) {
        $nama_alternatif      = $request->input('nama_alternatif');
        $jumlah_pesaing   = $request->input('jumlah_pesaing');
        $infrastruktur = $request->input('infrastruktur');
        $harga_sewa = $request->input('harga_sewa');
        $kepadatan_penduduk = $request->input('kepadatan_penduduk');
        $ketersediaan_air = $request->input('ketersediaan_air');
        $luas_lahan = $request->input('luas_lahan');
        
        $alternatif = Alternatif::where('id', $id)->first();
        $alternatif->nama_alternatif    = $nama_alternatif;
        $alternatif->jumlah_pesaing = $jumlah_pesaing;
        $alternatif->infrastruktur = $infrastruktur;
        $alternatif->harga_sewa = $harga_sewa;
        $alternatif->kepadatan_penduduk = $kepadatan_penduduk;
        $alternatif->ketersediaan_air = $ketersediaan_air;
        $alternatif->luas_lahan = $luas_lahan;

        $alternatif->save();

        return redirect()->to('/alternatif');
    }


    public function dashboard(){
        $alternatif= Alternatif::count();

        return view('main', compact('alternatif'));

    }

    public function store(Request $request) {
        $nama_alternatif      = $request->input('nama_alternatif');
        $jumlah_pesaing   = $request->input('jumlah_pesaing');
        $infrastruktur = $request->input('infrastruktur');
        $harga_sewa = $request->input('harga_sewa');
        $kepadatan_penduduk = $request->input('kepadatan_penduduk');
        $ketersediaan_air = $request->input('ketersediaan_air');
        $luas_lahan = $request->input('luas_lahan');

        $alternatif           = new Alternatif;
        $alternatif->nama_alternatif    = $nama_alternatif;
        $alternatif->jumlah_pesaing = $jumlah_pesaing;
        $alternatif->infrastruktur = $infrastruktur;
        $alternatif->harga_sewa = $harga_sewa;
        $alternatif->kepadatan_penduduk = $kepadatan_penduduk;
        $alternatif->ketersediaan_air = $ketersediaan_air;
        $alternatif->luas_lahan = $luas_lahan;
        $alternatif->save();

        return redirect()->to('/alternatif');
    }
    public function delete($id) {
        $alternatif = Alternatif::where('id', $id)->first();
        $alternatif->delete();
        return redirect()->back();
    }
}
