<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Toko;
use App\Models\Alternatif;


class DashboardController extends Controller {

    public function index() {
        
        $toko = Toko::count();
        $alternatif = Alternatif::count();

        return view('main',[
            'title' => 'Dashboard'
        ], compact('toko','alternatif'))
        ;  
    }
}
