<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kriteria;
use Illuminate\Http\Request;


class DashboardController extends Controller {

    public function index() {
        
        $kriteria= Kriteria::count();
        $alternatif= Alternatif::count();
        

        return view('main',[
            'title' => 'Dashboard'
        ], compact('kriteria','alternatif'))
        ;

        

        
    }
    
}
