<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Exports\bukuexport;
use Maatwebsite\Excel\Facades\Excel;

class bukucontroller extends Controller
{
    public function index(){
        $buku = DB::table('buku')
        ->join('rak_buku', 'buku.id', '=', 'rak_buku.id_buku')
        ->join('jenis_buku', 'rak_buku.id_jenis_buku', '=', 'jenis_buku.id')
        ->select('rak_buku.id', 'buku.judul', 'jenis_buku.jenis' , 'buku.tahun_terbit')
        ->get();
        return view('buku0024',['buku'=>$buku]);
    }
    public function carijoin(Request $request){
        $carijoin = $request->lihat;
        $buku = DB::table('buku')
        ->join('rak_buku', 'buku.id', '=', 'rak_buku.id_buku')
        ->join('jenis_buku', 'rak_buku.id_jenis_buku', '=', 'jenis_buku.id')
        ->select('rak_buku.id', 'buku.judul', 'jenis_buku.jenis' , 'buku.tahun_terbit')
        ->where('judul','like',"%".$carijoin."%")->paginate();
        return view('buku0024',['buku'=>$buku]);
    }

    public function export() 
    {
        return Excel::download(new BukuExport, 'Data_1461900024.xlsx');
    }
}