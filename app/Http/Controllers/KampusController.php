<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KampusController extends Controller
{
    public function index(){
        return view('datadaftarkampus');
    }
}
