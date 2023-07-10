<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller {

    public function index() {
        return view('datakriteria', [
            'users' => Kriteria::all(),
            'title' => 'Data kriteria'
        ]);
    }
    public function add() {
        return view('adddatakriteria',[
            'title' => 'Tambah Data kriteria'
        ]);
    }
    public function edit($id){
        
        $kriteria = Kriteria::where('id', $id)->first();

        return view('editkriteria', [
            'kriteria' => $kriteria,
            'title' => 'Edit Data kriteria'
        ]);

    }

    public function update(Request $request, $id) {
        $kriteria1      = $request->input('kriteria');
        $bobot1   = $request->input('bobot');
        $label1   = $request->input('label');
        
        
        $kriteria = Kriteria::where('id', $id)->first();
        $kriteria->kriteria    = $kriteria1;
        $kriteria->bobot = $bobot1;
        $kriteria->label = $label1;
       

        $kriteria->save();

        return redirect()->to('/kriteria');
    }


    public function dashboard(){
        $kriteria= Kriteria::count();

        return view('main', compact('kriteria'));

    }

    public function store(Request $request) {
        $kriteria1     = $request->input('kriteria');
        $bobot1   = $request->input('bobot');
        $label1   = $request->input('label');
        

        $kriteria           = new Kriteria;
        $kriteria->kriteria    = $kriteria1;
        $kriteria->bobot = $bobot1;
        $kriteria->label = $label1;
        

        $kriteria->save();

        return redirect()->to('/kriteria');
    }
    public function delete($id) {
        $kriteria = Kriteria::where('id', $id)->first();
        $kriteria->delete();
        return redirect()->back();
    }
}
