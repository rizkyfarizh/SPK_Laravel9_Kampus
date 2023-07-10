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
        
        // $alternatif = Alternatif::where('id', $id)->first();

        // return view('editalternatif', [
        //     'alternatif' => $alternatif,
        //     'title' => 'Edit Data alternatif'
        // ]);
        return view('editalternatif')->with([
            'alternatif' => Alternatif::find($id),
        ]);

    }

    public function update(Request $request, $id) {
        $alternatif1      = $request->input('alternatif');
        $nilai1   = $request->input('nilai');
        $biayakuliah1 = $request->input('biayakuliah');
        $akreditasi1 = $request->input('akreditasi');
        $prestasi1 = $request->input('prestasi');
        $jarak1 = $request->input('peluang');
        
        $alternatif = Alternatif::where('id', $id)->first();
        $alternatif->alternatif    = $alternatif1;
        $alternatif->nilai = $nilai1;
        $alternatif->biayakuliah = $biayakuliah1;
        $alternatif->akreditasi = $akreditasi1;
        $alternatif->prestasi = $prestasi1;
        $alternatif->peluang = $jarak1;

        $alternatif->save();

        return redirect()->to('/alternatif');
    }


    public function dashboard(){
        $alternatif= Alternatif::count();

        return view('main', compact('alternatif'));

    }

    public function store(Request $request) {
        $alternatif1 = $request->input('alternatif');
        $nilai1 = $request->input('nilai');
        $biayakuliah1 = $request->input('biayakuliah');
        $akreditasi1 = $request->input('akreditasi');
        $prestasi1 = $request->input('prestasi');
        $jarak1 = $request->input('peluang');

        $alternatif = new Alternatif;
        $alternatif->alternatif    = $alternatif1;
        $alternatif->nilai = $nilai1;
        $alternatif->biayakuliah = $biayakuliah1;
        $alternatif->akreditasi = $akreditasi1;
        $alternatif->prestasi = $prestasi1;
        $alternatif->peluang = $peluang1;

        $alternatif->save();

        return redirect()->to('/alternatif');
    }
    public function delete($id) {
        $alternatif = Alternatif::where('id', $id)->first();
        $alternatif->delete();
        return redirect()->back();
    }
}
