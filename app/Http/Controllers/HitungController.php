<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Toko;
use Illuminate\Http\Request;

class HitungController extends Controller
{

    public function hitung(Request $request){

        $toko = Toko::sum('nilai_bobot');

        $bobot1 = 0.2/$toko;
        $bobot2 = 0.125/$toko;
        $bobot3 = 0.2/$toko;
        $bobot4 = 0.25/$toko;
        $bobot5 = 0.125/$toko;
        $bobot6 = 0.1/$toko;
        $widget1 = [
            'toko' => $bobot1,
        ];
        $widget2 = [
            'toko' => $bobot2,
        ];
        $widget3 = [
            'toko' => $bobot3,
        ];
        $widget4 = [
            'toko' => $bobot4,
        ];
        $widget5 = [
            'toko' => $bobot5,
        ];
        $widget6 = [
            'toko' => $bobot6,
        ];


        $Alternatif = Alternatif::get();
        $data = Alternatif::orderby('id', 'asc')->get();

        $minC1 = Alternatif::min('jumlah_pesaing');
        $maxC1 = Alternatif::max('jumlah_pesaing');
        $minC2 = Alternatif::min('infrastruktur');
        $maxC2 = Alternatif::max('infrastruktur');
        $minC3 = Alternatif::min('harga_sewa');
        $maxC3 = Alternatif::max('harga_sewa');
        $minC4 = Alternatif::min('kepadatan_penduduk');
        $maxC4 = Alternatif::max('kepadatan_penduduk');
        $minC5 = Alternatif::min('ketersediaan_air');
        $maxC5 = Alternatif::max('ketersediaan_air');
        $minC6 = Alternatif::min('luas_lahan');
        $maxC6 = Alternatif::max('luas_lahan');

        $C1min =[
            'alternatif' => $minC1,
        ];
        $C1max =[
            'alternatif' => $maxC1,
        ];
        $C2min =[
            'alternatif' => $minC2,
        ];
        $C2max =[
            'alternatif' => $maxC2,
        ];
        $C3min =[
            'alternatif' => $minC3,
        ];
        $C3max =[
            'alternatif' => $maxC3,
        ];
        $C4min =[
            'alternatif' => $minC4,
        ];
        $C4max =[
            'alternatif' => $maxC4,
        ];
        $C5min =[
            'alternatif' => $minC5,
        ];
        $C5max =[
            'alternatif' => $maxC5,
        ];
        $C6min =[
            'alternatif' => $minC6,
        ];
        $C6max =[
            'alternatif' => $maxC6,
        ];

        $hasil = $minC1/$maxC1;
        $hasil1 =[
            'alternatif' => $hasil,
        ];

        return view('hitung', compact('hasil1','data', 'widget1', 'widget2', 'widget3', 'widget4', 'widget5', 'widget6', 'C1min', 'C1max', 'C2min', 'C2max', 'C3min', 'C3max', 'C4min', 'C4max', 'C5min', 'C5max', 'C6min', 'C6max'));
    }

}
