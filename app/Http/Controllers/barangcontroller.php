<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use App\Models\barang;
use App\Models\review;


class barangcontroller extends Controller
{
    public function daftar(){
        $allbarang = barang::all();
        $data['allbarang'] = barang::all();

        return view('daftar', $data);
    }
    public function review($IDBarang){
        $data = DB::table('daftar_barang')
        ->join('review_barang', 'review_barang.IDBarang', '=', 'daftar_barang.IDbarang')
        ->where('daftar_barang.IDBarang', $IDBarang)
        ->get();

        return view('review', ["daftarbarang"=>$data]);
    }
}
